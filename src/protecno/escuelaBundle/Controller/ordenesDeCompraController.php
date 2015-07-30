<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\ordenesDeCompra;
use protecno\escuelaBundle\Form\ordenesDeCompraType;

/**
 * ordenesDeCompra controller.
 *
 */
class ordenesDeCompraController extends Controller
{

    /**
     * Lists all ordenesDeCompra entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:ordenesDeCompra')->findAll();

        return $this->render('escuelaBundle:ordenesDeCompra:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new ordenesDeCompra entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new ordenesDeCompra();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ordenesdecompra_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:ordenesDeCompra:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a ordenesDeCompra entity.
     *
     * @param ordenesDeCompra $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(ordenesDeCompra $entity)
    {
        $form = $this->createForm(new ordenesDeCompraType(), $entity, array(
            'action' => $this->generateUrl('ordenesdecompra_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new ordenesDeCompra entity.
     *
     */
    public function newAction()
    {
        $entity = new ordenesDeCompra();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:ordenesDeCompra:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ordenesDeCompra entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:ordenesDeCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ordenesDeCompra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:ordenesDeCompra:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ordenesDeCompra entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:ordenesDeCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ordenesDeCompra entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:ordenesDeCompra:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a ordenesDeCompra entity.
    *
    * @param ordenesDeCompra $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(ordenesDeCompra $entity)
    {
        $form = $this->createForm(new ordenesDeCompraType(), $entity, array(
            'action' => $this->generateUrl('ordenesdecompra_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing ordenesDeCompra entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:ordenesDeCompra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find ordenesDeCompra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ordenesdecompra_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:ordenesDeCompra:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a ordenesDeCompra entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:ordenesDeCompra')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find ordenesDeCompra entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ordenesdecompra'));
    }

    /**
     * Creates a form to delete a ordenesDeCompra entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ordenesdecompra_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
