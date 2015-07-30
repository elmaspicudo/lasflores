<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\restableserAjustes;
use protecno\escuelaBundle\Form\restableserAjustesType;

/**
 * restableserAjustes controller.
 *
 */
class restableserAjustesController extends Controller
{

    /**
     * Lists all restableserAjustes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:restableserAjustes')->findAll();

        return $this->render('escuelaBundle:restableserAjustes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new restableserAjustes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new restableserAjustes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('restableserajustes_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:restableserAjustes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a restableserAjustes entity.
     *
     * @param restableserAjustes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(restableserAjustes $entity)
    {
        $form = $this->createForm(new restableserAjustesType(), $entity, array(
            'action' => $this->generateUrl('restableserajustes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new restableserAjustes entity.
     *
     */
    public function newAction()
    {
        $entity = new restableserAjustes();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:restableserAjustes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a restableserAjustes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:restableserAjustes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find restableserAjustes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:restableserAjustes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing restableserAjustes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:restableserAjustes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find restableserAjustes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:restableserAjustes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a restableserAjustes entity.
    *
    * @param restableserAjustes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(restableserAjustes $entity)
    {
        $form = $this->createForm(new restableserAjustesType(), $entity, array(
            'action' => $this->generateUrl('restableserajustes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing restableserAjustes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:restableserAjustes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find restableserAjustes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('restableserajustes_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:restableserAjustes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a restableserAjustes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:restableserAjustes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find restableserAjustes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('restableserajustes'));
    }

    /**
     * Creates a form to delete a restableserAjustes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('restableserajustes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
