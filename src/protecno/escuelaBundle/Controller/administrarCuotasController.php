<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\administrarCuotas;
use protecno\escuelaBundle\Form\administrarCuotasType;

/**
 * administrarCuotas controller.
 *
 */
class administrarCuotasController extends Controller
{

    /**
     * Lists all administrarCuotas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:administrarCuotas')->findAll();

        return $this->render('escuelaBundle:administrarCuotas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new administrarCuotas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new administrarCuotas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('administrarcuotas_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:administrarCuotas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a administrarCuotas entity.
     *
     * @param administrarCuotas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(administrarCuotas $entity)
    {
        $form = $this->createForm(new administrarCuotasType(), $entity, array(
            'action' => $this->generateUrl('administrarcuotas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new administrarCuotas entity.
     *
     */
    public function newAction()
    {
        $entity = new administrarCuotas();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:administrarCuotas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a administrarCuotas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:administrarCuotas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find administrarCuotas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:administrarCuotas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing administrarCuotas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:administrarCuotas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find administrarCuotas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:administrarCuotas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a administrarCuotas entity.
    *
    * @param administrarCuotas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(administrarCuotas $entity)
    {
        $form = $this->createForm(new administrarCuotasType(), $entity, array(
            'action' => $this->generateUrl('administrarcuotas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing administrarCuotas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:administrarCuotas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find administrarCuotas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('administrarcuotas_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:administrarCuotas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a administrarCuotas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:administrarCuotas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find administrarCuotas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('administrarcuotas'));
    }

    /**
     * Creates a form to delete a administrarCuotas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('administrarcuotas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
