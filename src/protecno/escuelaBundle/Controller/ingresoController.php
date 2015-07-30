<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\ingreso;
use protecno\escuelaBundle\Form\ingresoType;

/**
 * ingreso controller.
 *
 */
class ingresoController extends Controller
{

    /**
     * Lists all ingreso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:ingreso')->findAll();

        return $this->render('escuelaBundle:ingreso:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ingreso entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ingreso();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ingreso_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:ingreso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ingreso entity.
     *
     * @param ingreso $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ingreso $entity)
    {
        $form = $this->createForm(new ingresoType(), $entity, array(
            'action' => $this->generateUrl('ingreso_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ingreso entity.
     *
     */
    public function newAction()
    {
        $entity = new ingreso();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:ingreso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ingreso entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:ingreso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingreso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:ingreso:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ingreso entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:ingreso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingreso entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:ingreso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ingreso entity.
    *
    * @param ingreso $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ingreso $entity)
    {
        $form = $this->createForm(new ingresoType(), $entity, array(
            'action' => $this->generateUrl('ingreso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ingreso entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:ingreso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ingreso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ingreso_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:ingreso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ingreso entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:ingreso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ingreso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ingreso'));
    }

    /**
     * Creates a form to delete a ingreso entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ingreso_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
