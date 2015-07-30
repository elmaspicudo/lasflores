<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\tiendaCategorias;
use protecno\escuelaBundle\Form\tiendaCategoriasType;

/**
 * tiendaCategorias controller.
 *
 */
class tiendaCategoriasController extends Controller
{

    /**
     * Lists all tiendaCategorias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:tiendaCategorias')->findAll();

        return $this->render('escuelaBundle:tiendaCategorias:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tiendaCategorias entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tiendaCategorias();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tiendacategorias_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:tiendaCategorias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tiendaCategorias entity.
     *
     * @param tiendaCategorias $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tiendaCategorias $entity)
    {
        $form = $this->createForm(new tiendaCategoriasType(), $entity, array(
            'action' => $this->generateUrl('tiendacategorias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tiendaCategorias entity.
     *
     */
    public function newAction()
    {
        $entity = new tiendaCategorias();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:tiendaCategorias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tiendaCategorias entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiendaCategorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiendaCategorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tiendaCategorias:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tiendaCategorias entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiendaCategorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiendaCategorias entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tiendaCategorias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tiendaCategorias entity.
    *
    * @param tiendaCategorias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tiendaCategorias $entity)
    {
        $form = $this->createForm(new tiendaCategoriasType(), $entity, array(
            'action' => $this->generateUrl('tiendacategorias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tiendaCategorias entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiendaCategorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiendaCategorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tiendacategorias_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:tiendaCategorias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tiendaCategorias entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:tiendaCategorias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tiendaCategorias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiendacategorias'));
    }

    /**
     * Creates a form to delete a tiendaCategorias entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiendacategorias_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
