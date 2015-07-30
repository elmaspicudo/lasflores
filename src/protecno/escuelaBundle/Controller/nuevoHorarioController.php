<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\nuevoHorario;
use protecno\escuelaBundle\Form\nuevoHorarioType;

/**
 * nuevoHorario controller.
 *
 */
class nuevoHorarioController extends Controller
{

    /**
     * Lists all nuevoHorario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:nuevoHorario')->findAll();

        return $this->render('escuelaBundle:nuevoHorario:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new nuevoHorario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new nuevoHorario();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nuevohorario_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:nuevoHorario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a nuevoHorario entity.
     *
     * @param nuevoHorario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(nuevoHorario $entity)
    {
        $form = $this->createForm(new nuevoHorarioType(), $entity, array(
            'action' => $this->generateUrl('nuevohorario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new nuevoHorario entity.
     *
     */
    public function newAction()
    {
        $entity = new nuevoHorario();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:nuevoHorario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nuevoHorario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevoHorario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevoHorario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nuevoHorario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nuevoHorario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevoHorario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevoHorario entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nuevoHorario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a nuevoHorario entity.
    *
    * @param nuevoHorario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(nuevoHorario $entity)
    {
        $form = $this->createForm(new nuevoHorarioType(), $entity, array(
            'action' => $this->generateUrl('nuevohorario_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing nuevoHorario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevoHorario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevoHorario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('nuevohorario_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:nuevoHorario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a nuevoHorario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:nuevoHorario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find nuevoHorario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nuevohorario'));
    }

    /**
     * Creates a form to delete a nuevoHorario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nuevohorario_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
