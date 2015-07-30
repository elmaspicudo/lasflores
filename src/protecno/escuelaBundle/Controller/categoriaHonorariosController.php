<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\categoriaHonorarios;
use protecno\escuelaBundle\Form\categoriaHonorariosType;

/**
 * categoriaHonorarios controller.
 *
 */
class categoriaHonorariosController extends Controller
{

    /**
     * Lists all categoriaHonorarios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:categoriaHonorarios')->findAll();

        return $this->render('escuelaBundle:categoriaHonorarios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new categoriaHonorarios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new categoriaHonorarios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('categoriahonorarios_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:categoriaHonorarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a categoriaHonorarios entity.
     *
     * @param categoriaHonorarios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(categoriaHonorarios $entity)
    {
        $form = $this->createForm(new categoriaHonorariosType(), $entity, array(
            'action' => $this->generateUrl('categoriahonorarios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new categoriaHonorarios entity.
     *
     */
    public function newAction()
    {
        $entity = new categoriaHonorarios();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:categoriaHonorarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categoriaHonorarios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:categoriaHonorarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categoriaHonorarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:categoriaHonorarios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categoriaHonorarios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:categoriaHonorarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categoriaHonorarios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:categoriaHonorarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a categoriaHonorarios entity.
    *
    * @param categoriaHonorarios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(categoriaHonorarios $entity)
    {
        $form = $this->createForm(new categoriaHonorariosType(), $entity, array(
            'action' => $this->generateUrl('categoriahonorarios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing categoriaHonorarios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:categoriaHonorarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find categoriaHonorarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('categoriahonorarios_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:categoriaHonorarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a categoriaHonorarios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:categoriaHonorarios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find categoriaHonorarios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('categoriahonorarios'));
    }

    /**
     * Creates a form to delete a categoriaHonorarios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categoriahonorarios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
