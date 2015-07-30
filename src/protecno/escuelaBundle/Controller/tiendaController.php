<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\tienda;
use protecno\escuelaBundle\Form\tiendaType;

/**
 * tienda controller.
 *
 */
class tiendaController extends Controller
{

    /**
     * Lists all tienda entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:tienda')->findAll();

        return $this->render('escuelaBundle:tienda:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tienda entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tienda();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tienda_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:tienda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tienda entity.
     *
     * @param tienda $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tienda $entity)
    {
        $form = $this->createForm(new tiendaType(), $entity, array(
            'action' => $this->generateUrl('tienda_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tienda entity.
     *
     */
    public function newAction()
    {
        $entity = new tienda();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:tienda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tienda entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tienda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tienda:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tienda entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tienda entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tienda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tienda entity.
    *
    * @param tienda $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tienda $entity)
    {
        $form = $this->createForm(new tiendaType(), $entity, array(
            'action' => $this->generateUrl('tienda_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tienda entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tienda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tienda_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:tienda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tienda entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:tienda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tienda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tienda'));
    }

    /**
     * Creates a form to delete a tienda entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tienda_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
