<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\tiposDeProveedor;
use protecno\escuelaBundle\Form\tiposDeProveedorType;

/**
 * tiposDeProveedor controller.
 *
 */
class tiposDeProveedorController extends Controller
{

    /**
     * Lists all tiposDeProveedor entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:tiposDeProveedor')->findAll();

        return $this->render('escuelaBundle:tiposDeProveedor:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tiposDeProveedor entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tiposDeProveedor();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tiposdeproveedor_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:tiposDeProveedor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tiposDeProveedor entity.
     *
     * @param tiposDeProveedor $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tiposDeProveedor $entity)
    {
        $form = $this->createForm(new tiposDeProveedorType(), $entity, array(
            'action' => $this->generateUrl('tiposdeproveedor_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tiposDeProveedor entity.
     *
     */
    public function newAction()
    {
        $entity = new tiposDeProveedor();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:tiposDeProveedor:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tiposDeProveedor entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiposDeProveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiposDeProveedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tiposDeProveedor:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tiposDeProveedor entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiposDeProveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiposDeProveedor entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tiposDeProveedor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tiposDeProveedor entity.
    *
    * @param tiposDeProveedor $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tiposDeProveedor $entity)
    {
        $form = $this->createForm(new tiposDeProveedorType(), $entity, array(
            'action' => $this->generateUrl('tiposdeproveedor_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tiposDeProveedor entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiposDeProveedor')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiposDeProveedor entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tiposdeproveedor_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:tiposDeProveedor:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tiposDeProveedor entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:tiposDeProveedor')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tiposDeProveedor entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiposdeproveedor'));
    }

    /**
     * Creates a form to delete a tiposDeProveedor entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiposdeproveedor_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
