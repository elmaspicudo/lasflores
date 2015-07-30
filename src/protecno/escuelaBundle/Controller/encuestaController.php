<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\encuesta;
use protecno\escuelaBundle\Form\encuestaType;

/**
 * encuesta controller.
 *
 */
class encuestaController extends Controller
{

    /**
     * Lists all encuesta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:encuesta')->findAll();

        return $this->render('escuelaBundle:encuesta:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new encuesta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new encuesta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('encuesta_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:encuesta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a encuesta entity.
     *
     * @param encuesta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(encuesta $entity)
    {
        $form = $this->createForm(new encuestaType(), $entity, array(
            'action' => $this->generateUrl('encuesta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new encuesta entity.
     *
     */
    public function newAction()
    {
        $entity = new encuesta();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:encuesta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a encuesta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find encuesta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:encuesta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing encuesta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find encuesta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:encuesta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a encuesta entity.
    *
    * @param encuesta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(encuesta $entity)
    {
        $form = $this->createForm(new encuestaType(), $entity, array(
            'action' => $this->generateUrl('encuesta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing encuesta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:encuesta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find encuesta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('encuesta_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:encuesta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a encuesta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:encuesta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find encuesta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('encuesta'));
    }

    /**
     * Creates a form to delete a encuesta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('encuesta_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
