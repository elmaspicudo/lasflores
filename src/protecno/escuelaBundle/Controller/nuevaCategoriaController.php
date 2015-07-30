<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\nuevaCategoria;
use protecno\escuelaBundle\Form\nuevaCategoriaType;

/**
 * nuevaCategoria controller.
 *
 */
class nuevaCategoriaController extends Controller
{

    /**
     * Lists all nuevaCategoria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:nuevaCategoria')->findAll();

        return $this->render('escuelaBundle:nuevaCategoria:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new nuevaCategoria entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new nuevaCategoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nuevacategoria_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:nuevaCategoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a nuevaCategoria entity.
     *
     * @param nuevaCategoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(nuevaCategoria $entity)
    {
        $form = $this->createForm(new nuevaCategoriaType(), $entity, array(
            'action' => $this->generateUrl('nuevacategoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new nuevaCategoria entity.
     *
     */
    public function newAction()
    {
        $entity = new nuevaCategoria();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:nuevaCategoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nuevaCategoria entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevaCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevaCategoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nuevaCategoria:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nuevaCategoria entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevaCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevaCategoria entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nuevaCategoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a nuevaCategoria entity.
    *
    * @param nuevaCategoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(nuevaCategoria $entity)
    {
        $form = $this->createForm(new nuevaCategoriaType(), $entity, array(
            'action' => $this->generateUrl('nuevacategoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing nuevaCategoria entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevaCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevaCategoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('nuevacategoria_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:nuevaCategoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a nuevaCategoria entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:nuevaCategoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find nuevaCategoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nuevacategoria'));
    }

    /**
     * Creates a form to delete a nuevaCategoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nuevacategoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
