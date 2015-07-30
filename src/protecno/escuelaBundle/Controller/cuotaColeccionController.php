<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\cuotaColeccion;
use protecno\escuelaBundle\Form\cuotaColeccionType;

/**
 * cuotaColeccion controller.
 *
 */
class cuotaColeccionController extends Controller
{

    /**
     * Lists all cuotaColeccion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:cuotaColeccion')->findAll();

        return $this->render('escuelaBundle:cuotaColeccion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new cuotaColeccion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new cuotaColeccion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cuotacoleccion_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:cuotaColeccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a cuotaColeccion entity.
     *
     * @param cuotaColeccion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(cuotaColeccion $entity)
    {
        $form = $this->createForm(new cuotaColeccionType(), $entity, array(
            'action' => $this->generateUrl('cuotacoleccion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new cuotaColeccion entity.
     *
     */
    public function newAction()
    {
        $entity = new cuotaColeccion();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:cuotaColeccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cuotaColeccion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotaColeccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotaColeccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:cuotaColeccion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cuotaColeccion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotaColeccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotaColeccion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:cuotaColeccion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a cuotaColeccion entity.
    *
    * @param cuotaColeccion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(cuotaColeccion $entity)
    {
        $form = $this->createForm(new cuotaColeccionType(), $entity, array(
            'action' => $this->generateUrl('cuotacoleccion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing cuotaColeccion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotaColeccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotaColeccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cuotacoleccion_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:cuotaColeccion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a cuotaColeccion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:cuotaColeccion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find cuotaColeccion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cuotacoleccion'));
    }

    /**
     * Creates a form to delete a cuotaColeccion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuotacoleccion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
