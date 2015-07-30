<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\crearParticulares;
use protecno\escuelaBundle\Form\crearParticularesType;

/**
 * crearParticulares controller.
 *
 */
class crearParticularesController extends Controller
{

    /**
     * Lists all crearParticulares entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:crearParticulares')->findAll();

        return $this->render('escuelaBundle:crearParticulares:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new crearParticulares entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new crearParticulares();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('crearparticulares_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:crearParticulares:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a crearParticulares entity.
     *
     * @param crearParticulares $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(crearParticulares $entity)
    {
        $form = $this->createForm(new crearParticularesType(), $entity, array(
            'action' => $this->generateUrl('crearparticulares_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new crearParticulares entity.
     *
     */
    public function newAction()
    {
        $entity = new crearParticulares();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:crearParticulares:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a crearParticulares entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:crearParticulares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find crearParticulares entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:crearParticulares:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing crearParticulares entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:crearParticulares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find crearParticulares entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:crearParticulares:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a crearParticulares entity.
    *
    * @param crearParticulares $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(crearParticulares $entity)
    {
        $form = $this->createForm(new crearParticularesType(), $entity, array(
            'action' => $this->generateUrl('crearparticulares_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing crearParticulares entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:crearParticulares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find crearParticulares entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('crearparticulares_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:crearParticulares:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a crearParticulares entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:crearParticulares')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find crearParticulares entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('crearparticulares'));
    }

    /**
     * Creates a form to delete a crearParticulares entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('crearparticulares_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
