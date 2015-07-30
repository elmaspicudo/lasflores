<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\asignaturas;
use protecno\escuelaBundle\Form\asignaturasType;

/**
 * asignaturas controller.
 *
 */
class asignaturasController extends Controller
{

    /**
     * Lists all asignaturas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:asignaturas')->findAll();

        return $this->render('escuelaBundle:asignaturas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new asignaturas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new asignaturas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('asignaturas_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:asignaturas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a asignaturas entity.
     *
     * @param asignaturas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(asignaturas $entity)
    {
        $form = $this->createForm(new asignaturasType(), $entity, array(
            'action' => $this->generateUrl('asignaturas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new asignaturas entity.
     *
     */
    public function newAction()
    {
        $entity = new asignaturas();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:asignaturas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a asignaturas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:asignaturas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find asignaturas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:asignaturas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing asignaturas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:asignaturas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find asignaturas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:asignaturas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a asignaturas entity.
    *
    * @param asignaturas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(asignaturas $entity)
    {
        $form = $this->createForm(new asignaturasType(), $entity, array(
            'action' => $this->generateUrl('asignaturas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing asignaturas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:asignaturas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find asignaturas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('asignaturas_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:asignaturas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a asignaturas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:asignaturas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find asignaturas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('asignaturas'));
    }

    /**
     * Creates a form to delete a asignaturas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('asignaturas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
