<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use protecno\escuelaBundle\Entity\alumno;
use protecno\escuelaBundle\Form\alumnoType;

/**
 * alumno controller.
 *
 */
class alumnoController extends Controller
{

    /**
     * Lists all alumno entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:alumno')->findAll();

        return $this->render('escuelaBundle:alumno:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new alumno entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new alumno();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->setFechaDeAdmision(new \DateTime("now"));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('alumno_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:alumno:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

     /**
     * buscar coinsidencias alumno entity.
     *
     */
    public function searchAction(Request $request)
    {
       
        $em = $this->getDoctrine()->getManager();
        $lines=$em->getRepository('escuelaBundle:alumno')->findLike($request->request->get('search', ''));

        $response = new Response(json_encode(array('success' => true,'mylist'=>$lines)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
    }

    /**
     * Creates a form to create a alumno entity.
     *
     * @param alumno $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(alumno $entity)
    {
        $form = $this->createForm(new alumnoType(), $entity, array(
            'action' => $this->generateUrl('alumno_create'),
            'method' => 'POST',
        ));

       // $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new alumno entity.
     *
     */
    public function newAction()
    {
        $entity = new alumno();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:alumno:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a alumno entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:alumno')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find alumno entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:alumno:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing alumno entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:alumno')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find alumno entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:alumno:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a alumno entity.
    *
    * @param alumno $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(alumno $entity)
    {
        $form = $this->createForm(new alumnoType(), $entity, array(
            'action' => $this->generateUrl('alumno_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing alumno entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:alumno')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find alumno entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('alumno_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:alumno:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a alumno entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:alumno')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find alumno entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('alumno'));
    }

    /**
     * Creates a form to delete a alumno entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alumno_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
