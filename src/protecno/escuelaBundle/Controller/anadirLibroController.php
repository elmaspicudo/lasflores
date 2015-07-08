<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirLibro;
use protecno\escuelaBundle\Form\anadirLibroType;

/**
 * anadirLibro controller.
 *
 */
class anadirLibroController extends Controller
{

    /**
     * Lists all anadirLibro entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirLibro')->findAll();

        return $this->render('escuelaBundle:anadirLibro:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirLibro entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirLibro();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirlibro_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirLibro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirLibro entity.
     *
     * @param anadirLibro $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirLibro $entity)
    {
        $form = $this->createForm(new anadirLibroType(), $entity, array(
            'action' => $this->generateUrl('anadirlibro_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirLibro entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirLibro();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirLibro:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirLibro entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirLibro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirLibro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirLibro:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirLibro entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirLibro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirLibro entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirLibro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirLibro entity.
    *
    * @param anadirLibro $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirLibro $entity)
    {
        $form = $this->createForm(new anadirLibroType(), $entity, array(
            'action' => $this->generateUrl('anadirlibro_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirLibro entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirLibro')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirLibro entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadirlibro_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirLibro:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirLibro entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirLibro')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirLibro entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadirlibro'));
    }

    /**
     * Creates a form to delete a anadirLibro entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadirlibro_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
