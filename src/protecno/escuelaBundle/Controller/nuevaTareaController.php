<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\nuevaTarea;
use protecno\escuelaBundle\Form\nuevaTareaType;

/**
 * nuevaTarea controller.
 *
 */
class nuevaTareaController extends Controller
{

    /**
     * Lists all nuevaTarea entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:nuevaTarea')->findAll();

        return $this->render('escuelaBundle:nuevaTarea:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new nuevaTarea entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new nuevaTarea();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nuevatarea_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:nuevaTarea:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a nuevaTarea entity.
     *
     * @param nuevaTarea $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(nuevaTarea $entity)
    {
        $form = $this->createForm(new nuevaTareaType(), $entity, array(
            'action' => $this->generateUrl('nuevatarea_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new nuevaTarea entity.
     *
     */
    public function newAction()
    {
        $entity = new nuevaTarea();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:nuevaTarea:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nuevaTarea entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevaTarea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevaTarea entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nuevaTarea:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nuevaTarea entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevaTarea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevaTarea entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nuevaTarea:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a nuevaTarea entity.
    *
    * @param nuevaTarea $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(nuevaTarea $entity)
    {
        $form = $this->createForm(new nuevaTareaType(), $entity, array(
            'action' => $this->generateUrl('nuevatarea_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing nuevaTarea entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevaTarea')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevaTarea entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('nuevatarea_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:nuevaTarea:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a nuevaTarea entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:nuevaTarea')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find nuevaTarea entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nuevatarea'));
    }

    /**
     * Creates a form to delete a nuevaTarea entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nuevatarea_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
