<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\temporizacionDeClase;
use protecno\escuelaBundle\Form\temporizacionDeClaseType;

/**
 * temporizacionDeClase controller.
 *
 */
class temporizacionDeClaseController extends Controller
{

    /**
     * Lists all temporizacionDeClase entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:temporizacionDeClase')->findAll();

        return $this->render('escuelaBundle:temporizacionDeClase:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new temporizacionDeClase entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new temporizacionDeClase();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('temporizaciondeclase_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:temporizacionDeClase:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a temporizacionDeClase entity.
     *
     * @param temporizacionDeClase $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(temporizacionDeClase $entity)
    {
        $form = $this->createForm(new temporizacionDeClaseType(), $entity, array(
            'action' => $this->generateUrl('temporizaciondeclase_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new temporizacionDeClase entity.
     *
     */
    public function newAction()
    {
        $entity = new temporizacionDeClase();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:temporizacionDeClase:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a temporizacionDeClase entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:temporizacionDeClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find temporizacionDeClase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:temporizacionDeClase:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing temporizacionDeClase entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:temporizacionDeClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find temporizacionDeClase entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:temporizacionDeClase:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a temporizacionDeClase entity.
    *
    * @param temporizacionDeClase $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(temporizacionDeClase $entity)
    {
        $form = $this->createForm(new temporizacionDeClaseType(), $entity, array(
            'action' => $this->generateUrl('temporizaciondeclase_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing temporizacionDeClase entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:temporizacionDeClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find temporizacionDeClase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('temporizaciondeclase_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:temporizacionDeClase:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a temporizacionDeClase entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:temporizacionDeClase')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find temporizacionDeClase entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('temporizaciondeclase'));
    }

    /**
     * Creates a form to delete a temporizacionDeClase entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('temporizaciondeclase_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
