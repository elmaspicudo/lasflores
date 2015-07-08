<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\administrarClientes;
use protecno\escuelaBundle\Form\administrarClientesType;

/**
 * administrarClientes controller.
 *
 */
class administrarClientesController extends Controller
{

    /**
     * Lists all administrarClientes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:administrarClientes')->findAll();

        return $this->render('escuelaBundle:administrarClientes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new administrarClientes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new administrarClientes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('administrarclientes_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:administrarClientes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a administrarClientes entity.
     *
     * @param administrarClientes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(administrarClientes $entity)
    {
        $form = $this->createForm(new administrarClientesType(), $entity, array(
            'action' => $this->generateUrl('administrarclientes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new administrarClientes entity.
     *
     */
    public function newAction()
    {
        $entity = new administrarClientes();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:administrarClientes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a administrarClientes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:administrarClientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find administrarClientes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:administrarClientes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing administrarClientes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:administrarClientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find administrarClientes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:administrarClientes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a administrarClientes entity.
    *
    * @param administrarClientes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(administrarClientes $entity)
    {
        $form = $this->createForm(new administrarClientesType(), $entity, array(
            'action' => $this->generateUrl('administrarclientes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing administrarClientes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:administrarClientes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find administrarClientes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('administrarclientes_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:administrarClientes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a administrarClientes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:administrarClientes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find administrarClientes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('administrarclientes'));
    }

    /**
     * Creates a form to delete a administrarClientes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('administrarclientes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
