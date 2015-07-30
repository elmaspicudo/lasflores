<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\honorariosInstantaneos;
use protecno\escuelaBundle\Form\honorariosInstantaneosType;

/**
 * honorariosInstantaneos controller.
 *
 */
class honorariosInstantaneosController extends Controller
{

    /**
     * Lists all honorariosInstantaneos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:honorariosInstantaneos')->findAll();

        return $this->render('escuelaBundle:honorariosInstantaneos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new honorariosInstantaneos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new honorariosInstantaneos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('honorariosinstantaneos_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:honorariosInstantaneos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a honorariosInstantaneos entity.
     *
     * @param honorariosInstantaneos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(honorariosInstantaneos $entity)
    {
        $form = $this->createForm(new honorariosInstantaneosType(), $entity, array(
            'action' => $this->generateUrl('honorariosinstantaneos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new honorariosInstantaneos entity.
     *
     */
    public function newAction()
    {
        $entity = new honorariosInstantaneos();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:honorariosInstantaneos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a honorariosInstantaneos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:honorariosInstantaneos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find honorariosInstantaneos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:honorariosInstantaneos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing honorariosInstantaneos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:honorariosInstantaneos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find honorariosInstantaneos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:honorariosInstantaneos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a honorariosInstantaneos entity.
    *
    * @param honorariosInstantaneos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(honorariosInstantaneos $entity)
    {
        $form = $this->createForm(new honorariosInstantaneosType(), $entity, array(
            'action' => $this->generateUrl('honorariosinstantaneos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing honorariosInstantaneos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:honorariosInstantaneos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find honorariosInstantaneos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('honorariosinstantaneos_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:honorariosInstantaneos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a honorariosInstantaneos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:honorariosInstantaneos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find honorariosInstantaneos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('honorariosinstantaneos'));
    }

    /**
     * Creates a form to delete a honorariosInstantaneos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('honorariosinstantaneos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
