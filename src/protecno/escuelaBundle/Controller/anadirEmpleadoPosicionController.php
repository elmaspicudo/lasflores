<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirEmpleadoPosicion;
use protecno\escuelaBundle\Form\anadirEmpleadoPosicionType;

/**
 * anadirEmpleadoPosicion controller.
 *
 */
class anadirEmpleadoPosicionController extends Controller
{

    /**
     * Lists all anadirEmpleadoPosicion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirEmpleadoPosicion')->findAll();

        return $this->render('escuelaBundle:anadirEmpleadoPosicion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirEmpleadoPosicion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirEmpleadoPosicion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirempleadoposicion_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirEmpleadoPosicion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirEmpleadoPosicion entity.
     *
     * @param anadirEmpleadoPosicion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirEmpleadoPosicion $entity)
    {
        $form = $this->createForm(new anadirEmpleadoPosicionType(), $entity, array(
            'action' => $this->generateUrl('anadirempleadoposicion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirEmpleadoPosicion entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirEmpleadoPosicion();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirEmpleadoPosicion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirEmpleadoPosicion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoPosicion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoPosicion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirEmpleadoPosicion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirEmpleadoPosicion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoPosicion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoPosicion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirEmpleadoPosicion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirEmpleadoPosicion entity.
    *
    * @param anadirEmpleadoPosicion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirEmpleadoPosicion $entity)
    {
        $form = $this->createForm(new anadirEmpleadoPosicionType(), $entity, array(
            'action' => $this->generateUrl('anadirempleadoposicion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirEmpleadoPosicion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoPosicion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoPosicion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadirempleadoposicion_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirEmpleadoPosicion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirEmpleadoPosicion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirEmpleadoPosicion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirEmpleadoPosicion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadirempleadoposicion'));
    }

    /**
     * Creates a form to delete a anadirEmpleadoPosicion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadirempleadoposicion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
