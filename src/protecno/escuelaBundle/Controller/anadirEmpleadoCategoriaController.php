<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirEmpleadoCategoria;
use protecno\escuelaBundle\Form\anadirEmpleadoCategoriaType;

/**
 * anadirEmpleadoCategoria controller.
 *
 */
class anadirEmpleadoCategoriaController extends Controller
{

    /**
     * Lists all anadirEmpleadoCategoria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirEmpleadoCategoria')->findAll();

        return $this->render('escuelaBundle:anadirEmpleadoCategoria:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirEmpleadoCategoria entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirEmpleadoCategoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirempleadocategoria_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirEmpleadoCategoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirEmpleadoCategoria entity.
     *
     * @param anadirEmpleadoCategoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirEmpleadoCategoria $entity)
    {
        $form = $this->createForm(new anadirEmpleadoCategoriaType(), $entity, array(
            'action' => $this->generateUrl('anadirempleadocategoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirEmpleadoCategoria entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirEmpleadoCategoria();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirEmpleadoCategoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirEmpleadoCategoria entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoCategoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirEmpleadoCategoria:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirEmpleadoCategoria entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoCategoria entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirEmpleadoCategoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirEmpleadoCategoria entity.
    *
    * @param anadirEmpleadoCategoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirEmpleadoCategoria $entity)
    {
        $form = $this->createForm(new anadirEmpleadoCategoriaType(), $entity, array(
            'action' => $this->generateUrl('anadirempleadocategoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirEmpleadoCategoria entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoCategoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadirempleadocategoria_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirEmpleadoCategoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirEmpleadoCategoria entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirEmpleadoCategoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirEmpleadoCategoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadirempleadocategoria'));
    }

    /**
     * Creates a form to delete a anadirEmpleadoCategoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadirempleadocategoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
