<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\gastos;
use protecno\escuelaBundle\Form\gastosType;

/**
 * gastos controller.
 *
 */
class gastosController extends Controller
{

    /**
     * Lists all gastos entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:gastos')->findAll();

        return $this->render('escuelaBundle:gastos:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new gastos entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new gastos();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gastos_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:gastos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a gastos entity.
     *
     * @param gastos $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(gastos $entity)
    {
        $form = $this->createForm(new gastosType(), $entity, array(
            'action' => $this->generateUrl('gastos_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new gastos entity.
     *
     */
    public function newAction()
    {
        $entity = new gastos();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:gastos:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a gastos entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:gastos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find gastos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:gastos:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gastos entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:gastos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find gastos entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:gastos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a gastos entity.
    *
    * @param gastos $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(gastos $entity)
    {
        $form = $this->createForm(new gastosType(), $entity, array(
            'action' => $this->generateUrl('gastos_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing gastos entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:gastos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find gastos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gastos_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:gastos:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a gastos entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:gastos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find gastos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gastos'));
    }

    /**
     * Creates a form to delete a gastos entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gastos_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
