<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\agregarFoto;
use protecno\escuelaBundle\Form\agregarFotoType;

/**
 * agregarFoto controller.
 *
 */
class agregarFotoController extends Controller
{

    /**
     * Lists all agregarFoto entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:agregarFoto')->findAll();

        return $this->render('escuelaBundle:agregarFoto:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new agregarFoto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new agregarFoto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('agregarfoto_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:agregarFoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a agregarFoto entity.
     *
     * @param agregarFoto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(agregarFoto $entity)
    {
        $form = $this->createForm(new agregarFotoType(), $entity, array(
            'action' => $this->generateUrl('agregarfoto_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new agregarFoto entity.
     *
     */
    public function newAction()
    {
        $entity = new agregarFoto();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:agregarFoto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a agregarFoto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:agregarFoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find agregarFoto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:agregarFoto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing agregarFoto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:agregarFoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find agregarFoto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:agregarFoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a agregarFoto entity.
    *
    * @param agregarFoto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(agregarFoto $entity)
    {
        $form = $this->createForm(new agregarFotoType(), $entity, array(
            'action' => $this->generateUrl('agregarfoto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing agregarFoto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:agregarFoto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find agregarFoto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('agregarfoto_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:agregarFoto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a agregarFoto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:agregarFoto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find agregarFoto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('agregarfoto'));
    }

    /**
     * Creates a form to delete a agregarFoto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agregarfoto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
