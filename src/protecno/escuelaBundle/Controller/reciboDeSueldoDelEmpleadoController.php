<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\reciboDeSueldoDelEmpleado;
use protecno\escuelaBundle\Form\reciboDeSueldoDelEmpleadoType;

/**
 * reciboDeSueldoDelEmpleado controller.
 *
 */
class reciboDeSueldoDelEmpleadoController extends Controller
{

    /**
     * Lists all reciboDeSueldoDelEmpleado entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:reciboDeSueldoDelEmpleado')->findAll();

        return $this->render('escuelaBundle:reciboDeSueldoDelEmpleado:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new reciboDeSueldoDelEmpleado entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new reciboDeSueldoDelEmpleado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('recibodesueldodelempleado_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:reciboDeSueldoDelEmpleado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a reciboDeSueldoDelEmpleado entity.
     *
     * @param reciboDeSueldoDelEmpleado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(reciboDeSueldoDelEmpleado $entity)
    {
        $form = $this->createForm(new reciboDeSueldoDelEmpleadoType(), $entity, array(
            'action' => $this->generateUrl('recibodesueldodelempleado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new reciboDeSueldoDelEmpleado entity.
     *
     */
    public function newAction()
    {
        $entity = new reciboDeSueldoDelEmpleado();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:reciboDeSueldoDelEmpleado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a reciboDeSueldoDelEmpleado entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:reciboDeSueldoDelEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reciboDeSueldoDelEmpleado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:reciboDeSueldoDelEmpleado:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing reciboDeSueldoDelEmpleado entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:reciboDeSueldoDelEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reciboDeSueldoDelEmpleado entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:reciboDeSueldoDelEmpleado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a reciboDeSueldoDelEmpleado entity.
    *
    * @param reciboDeSueldoDelEmpleado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(reciboDeSueldoDelEmpleado $entity)
    {
        $form = $this->createForm(new reciboDeSueldoDelEmpleadoType(), $entity, array(
            'action' => $this->generateUrl('recibodesueldodelempleado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing reciboDeSueldoDelEmpleado entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:reciboDeSueldoDelEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find reciboDeSueldoDelEmpleado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('recibodesueldodelempleado_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:reciboDeSueldoDelEmpleado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a reciboDeSueldoDelEmpleado entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:reciboDeSueldoDelEmpleado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find reciboDeSueldoDelEmpleado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('recibodesueldodelempleado'));
    }

    /**
     * Creates a form to delete a reciboDeSueldoDelEmpleado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('recibodesueldodelempleado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
