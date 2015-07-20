<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\carpetaPrivilegiada;
use protecno\escuelaBundle\Form\carpetaPrivilegiadaType;

/**
 * carpetaPrivilegiada controller.
 *
 */
class carpetaPrivilegiadaController extends Controller
{

    /**
     * Lists all carpetaPrivilegiada entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:carpetaPrivilegiada')->findAll();

        return $this->render('escuelaBundle:carpetaPrivilegiada:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new carpetaPrivilegiada entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new carpetaPrivilegiada();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('carpetaprivilegiada_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:carpetaPrivilegiada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a carpetaPrivilegiada entity.
     *
     * @param carpetaPrivilegiada $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(carpetaPrivilegiada $entity)
    {
        $form = $this->createForm(new carpetaPrivilegiadaType(), $entity, array(
            'action' => $this->generateUrl('carpetaprivilegiada_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new carpetaPrivilegiada entity.
     *
     */
    public function newAction()
    {
        $entity = new carpetaPrivilegiada();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:carpetaPrivilegiada:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a carpetaPrivilegiada entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:carpetaPrivilegiada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find carpetaPrivilegiada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:carpetaPrivilegiada:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing carpetaPrivilegiada entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:carpetaPrivilegiada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find carpetaPrivilegiada entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:carpetaPrivilegiada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a carpetaPrivilegiada entity.
    *
    * @param carpetaPrivilegiada $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(carpetaPrivilegiada $entity)
    {
        $form = $this->createForm(new carpetaPrivilegiadaType(), $entity, array(
            'action' => $this->generateUrl('carpetaprivilegiada_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing carpetaPrivilegiada entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:carpetaPrivilegiada')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find carpetaPrivilegiada entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('carpetaprivilegiada_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:carpetaPrivilegiada:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a carpetaPrivilegiada entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:carpetaPrivilegiada')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find carpetaPrivilegiada entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('carpetaprivilegiada'));
    }

    /**
     * Creates a form to delete a carpetaPrivilegiada entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carpetaprivilegiada_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
