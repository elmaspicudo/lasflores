<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\tiempoDeClase;
use protecno\escuelaBundle\Form\tiempoDeClaseType;

/**
 * tiempoDeClase controller.
 *
 */
class tiempoDeClaseController extends Controller
{

    /**
     * Lists all tiempoDeClase entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:tiempoDeClase')->findAll();

        return $this->render('escuelaBundle:tiempoDeClase:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tiempoDeClase entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tiempoDeClase();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tiempodeclase_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:tiempoDeClase:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tiempoDeClase entity.
     *
     * @param tiempoDeClase $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tiempoDeClase $entity)
    {
        $form = $this->createForm(new tiempoDeClaseType(), $entity, array(
            'action' => $this->generateUrl('tiempodeclase_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tiempoDeClase entity.
     *
     */
    public function newAction()
    {
        $entity = new tiempoDeClase();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:tiempoDeClase:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tiempoDeClase entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiempoDeClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiempoDeClase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tiempoDeClase:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tiempoDeClase entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiempoDeClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiempoDeClase entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tiempoDeClase:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tiempoDeClase entity.
    *
    * @param tiempoDeClase $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tiempoDeClase $entity)
    {
        $form = $this->createForm(new tiempoDeClaseType(), $entity, array(
            'action' => $this->generateUrl('tiempodeclase_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tiempoDeClase entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiempoDeClase')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiempoDeClase entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tiempodeclase_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:tiempoDeClase:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tiempoDeClase entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:tiempoDeClase')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tiempoDeClase entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiempodeclase'));
    }

    /**
     * Creates a form to delete a tiempoDeClase entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiempodeclase_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
