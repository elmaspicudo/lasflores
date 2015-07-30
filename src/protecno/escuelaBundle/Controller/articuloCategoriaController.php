<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\articuloCategoria;
use protecno\escuelaBundle\Form\articuloCategoriaType;

/**
 * articuloCategoria controller.
 *
 */
class articuloCategoriaController extends Controller
{

    /**
     * Lists all articuloCategoria entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:articuloCategoria')->findAll();

        return $this->render('escuelaBundle:articuloCategoria:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new articuloCategoria entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new articuloCategoria();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articulocategoria_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:articuloCategoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a articuloCategoria entity.
     *
     * @param articuloCategoria $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(articuloCategoria $entity)
    {
        $form = $this->createForm(new articuloCategoriaType(), $entity, array(
            'action' => $this->generateUrl('articulocategoria_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new articuloCategoria entity.
     *
     */
    public function newAction()
    {
        $entity = new articuloCategoria();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:articuloCategoria:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a articuloCategoria entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:articuloCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find articuloCategoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:articuloCategoria:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing articuloCategoria entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:articuloCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find articuloCategoria entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:articuloCategoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a articuloCategoria entity.
    *
    * @param articuloCategoria $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(articuloCategoria $entity)
    {
        $form = $this->createForm(new articuloCategoriaType(), $entity, array(
            'action' => $this->generateUrl('articulocategoria_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing articuloCategoria entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:articuloCategoria')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find articuloCategoria entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('articulocategoria_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:articuloCategoria:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a articuloCategoria entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:articuloCategoria')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find articuloCategoria entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('articulocategoria'));
    }

    /**
     * Creates a form to delete a articuloCategoria entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articulocategoria_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
