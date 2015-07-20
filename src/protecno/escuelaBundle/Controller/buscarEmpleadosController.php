<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\buscarEmpleados;
use protecno\escuelaBundle\Form\buscarEmpleadosType;

/**
 * buscarEmpleados controller.
 *
 */
class buscarEmpleadosController extends Controller
{

    /**
     * Lists all buscarEmpleados entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:buscarEmpleados')->findAll();

        return $this->render('escuelaBundle:buscarEmpleados:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new buscarEmpleados entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new buscarEmpleados();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('buscarempleados_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:buscarEmpleados:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a buscarEmpleados entity.
     *
     * @param buscarEmpleados $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(buscarEmpleados $entity)
    {
        $form = $this->createForm(new buscarEmpleadosType(), $entity, array(
            'action' => $this->generateUrl('buscarempleados_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new buscarEmpleados entity.
     *
     */
    public function newAction()
    {
        $entity = new buscarEmpleados();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:buscarEmpleados:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a buscarEmpleados entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:buscarEmpleados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find buscarEmpleados entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:buscarEmpleados:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing buscarEmpleados entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:buscarEmpleados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find buscarEmpleados entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:buscarEmpleados:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a buscarEmpleados entity.
    *
    * @param buscarEmpleados $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(buscarEmpleados $entity)
    {
        $form = $this->createForm(new buscarEmpleadosType(), $entity, array(
            'action' => $this->generateUrl('buscarempleados_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing buscarEmpleados entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:buscarEmpleados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find buscarEmpleados entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('buscarempleados_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:buscarEmpleados:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a buscarEmpleados entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:buscarEmpleados')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find buscarEmpleados entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('buscarempleados'));
    }

    /**
     * Creates a form to delete a buscarEmpleados entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('buscarempleados_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
