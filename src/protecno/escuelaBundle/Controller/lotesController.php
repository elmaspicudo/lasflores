<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\lotes;
use protecno\escuelaBundle\Form\lotesType;

/**
 * lotes controller.
 *
 */
class lotesController extends Controller
{

    /**
     * Lists all lotes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:lotes')->findAll();

        return $this->render('escuelaBundle:lotes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new lotes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new lotes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('lotes_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:lotes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a lotes entity.
     *
     * @param lotes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(lotes $entity)
    {
        $form = $this->createForm(new lotesType(), $entity, array(
            'action' => $this->generateUrl('lotes_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new lotes entity.
     *
     */
    public function newAction()
    {
        $entity = new lotes();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:lotes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a lotes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:lotes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find lotes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:lotes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing lotes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:lotes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find lotes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:lotes:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a lotes entity.
    *
    * @param lotes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(lotes $entity)
    {
        $form = $this->createForm(new lotesType(), $entity, array(
            'action' => $this->generateUrl('lotes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

       // $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing lotes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:lotes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find lotes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('lotes_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:lotes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a lotes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:lotes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find lotes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('lotes'));
    }

    /**
     * Creates a form to delete a lotes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('lotes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
