<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\departamentoRestableser;
use protecno\escuelaBundle\Form\departamentoRestableserType;

/**
 * departamentoRestableser controller.
 *
 */
class departamentoRestableserController extends Controller
{

    /**
     * Lists all departamentoRestableser entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:departamentoRestableser')->findAll();

        return $this->render('escuelaBundle:departamentoRestableser:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new departamentoRestableser entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new departamentoRestableser();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('departamentorestableser_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:departamentoRestableser:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a departamentoRestableser entity.
     *
     * @param departamentoRestableser $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(departamentoRestableser $entity)
    {
        $form = $this->createForm(new departamentoRestableserType(), $entity, array(
            'action' => $this->generateUrl('departamentorestableser_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new departamentoRestableser entity.
     *
     */
    public function newAction()
    {
        $entity = new departamentoRestableser();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:departamentoRestableser:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a departamentoRestableser entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:departamentoRestableser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find departamentoRestableser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:departamentoRestableser:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing departamentoRestableser entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:departamentoRestableser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find departamentoRestableser entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:departamentoRestableser:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a departamentoRestableser entity.
    *
    * @param departamentoRestableser $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(departamentoRestableser $entity)
    {
        $form = $this->createForm(new departamentoRestableserType(), $entity, array(
            'action' => $this->generateUrl('departamentorestableser_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing departamentoRestableser entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:departamentoRestableser')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find departamentoRestableser entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('departamentorestableser_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:departamentoRestableser:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a departamentoRestableser entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:departamentoRestableser')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find departamentoRestableser entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('departamentorestableser'));
    }

    /**
     * Creates a form to delete a departamentoRestableser entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('departamentorestableser_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
