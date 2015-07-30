<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\horariosDelProfesor;
use protecno\escuelaBundle\Form\horariosDelProfesorType;

/**
 * horariosDelProfesor controller.
 *
 */
class horariosDelProfesorController extends Controller
{

    /**
     * Lists all horariosDelProfesor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:horariosDelProfesor')->findAll();

        return $this->render('escuelaBundle:horariosDelProfesor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new horariosDelProfesor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new horariosDelProfesor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('horariosdelprofesor_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:horariosDelProfesor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a horariosDelProfesor entity.
     *
     * @param horariosDelProfesor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(horariosDelProfesor $entity)
    {
        $form = $this->createForm(new horariosDelProfesorType(), $entity, array(
            'action' => $this->generateUrl('horariosdelprofesor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new horariosDelProfesor entity.
     *
     */
    public function newAction()
    {
        $entity = new horariosDelProfesor();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:horariosDelProfesor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a horariosDelProfesor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:horariosDelProfesor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find horariosDelProfesor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:horariosDelProfesor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing horariosDelProfesor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:horariosDelProfesor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find horariosDelProfesor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:horariosDelProfesor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a horariosDelProfesor entity.
    *
    * @param horariosDelProfesor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(horariosDelProfesor $entity)
    {
        $form = $this->createForm(new horariosDelProfesorType(), $entity, array(
            'action' => $this->generateUrl('horariosdelprofesor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing horariosDelProfesor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:horariosDelProfesor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find horariosDelProfesor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('horariosdelprofesor_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:horariosDelProfesor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a horariosDelProfesor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:horariosDelProfesor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find horariosDelProfesor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('horariosdelprofesor'));
    }

    /**
     * Creates a form to delete a horariosDelProfesor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('horariosdelprofesor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
