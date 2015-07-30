<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\reporteLotes;
use protecno\escuelaBundle\Form\reporteLotesType;

/**
 * reporteLotes controller.
 *
 */
class reporteLotesController extends Controller
{

    /**
     * Lists all reporteLotes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:reporteLotes')->findAll();

        return $this->render('escuelaBundle:reporteLotes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new reporteLotes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new reporteLotes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('reportelotes_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:reporteLotes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a reporteLotes entity.
     *
     * @param reporteLotes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(reporteLotes $entity)
    {
        $form = $this->createForm(new reporteLotesType(), $entity, array(
            'action' => $this->generateUrl('reportelotes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new reporteLotes entity.
     *
     */
    public function newAction()
    {
        $entity = new reporteLotes();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:reporteLotes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reporteLotes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:reporteLotes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reporteLotes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:reporteLotes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reporteLotes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:reporteLotes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reporteLotes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:reporteLotes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a reporteLotes entity.
    *
    * @param reporteLotes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(reporteLotes $entity)
    {
        $form = $this->createForm(new reporteLotesType(), $entity, array(
            'action' => $this->generateUrl('reportelotes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing reporteLotes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:reporteLotes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reporteLotes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('reportelotes_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:reporteLotes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a reporteLotes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:reporteLotes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find reporteLotes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('reportelotes'));
    }

    /**
     * Creates a form to delete a reporteLotes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('reportelotes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
