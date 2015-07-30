<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\articuloTienda;
use protecno\escuelaBundle\Form\articuloTiendaType;

/**
 * articuloTienda controller.
 *
 */
class articuloTiendaController extends Controller
{

    /**
     * Lists all articuloTienda entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:articuloTienda')->findAll();

        return $this->render('escuelaBundle:articuloTienda:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new articuloTienda entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new articuloTienda();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('articulotienda_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:articuloTienda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a articuloTienda entity.
     *
     * @param articuloTienda $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(articuloTienda $entity)
    {
        $form = $this->createForm(new articuloTiendaType(), $entity, array(
            'action' => $this->generateUrl('articulotienda_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new articuloTienda entity.
     *
     */
    public function newAction()
    {
        $entity = new articuloTienda();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:articuloTienda:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a articuloTienda entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:articuloTienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find articuloTienda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:articuloTienda:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing articuloTienda entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:articuloTienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find articuloTienda entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:articuloTienda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a articuloTienda entity.
    *
    * @param articuloTienda $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(articuloTienda $entity)
    {
        $form = $this->createForm(new articuloTiendaType(), $entity, array(
            'action' => $this->generateUrl('articulotienda_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing articuloTienda entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:articuloTienda')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find articuloTienda entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('articulotienda_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:articuloTienda:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a articuloTienda entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:articuloTienda')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find articuloTienda entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('articulotienda'));
    }

    /**
     * Creates a form to delete a articuloTienda entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('articulotienda_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
