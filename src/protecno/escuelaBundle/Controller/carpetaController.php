<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\carpeta;
use protecno\escuelaBundle\Form\carpetaType;

/**
 * carpeta controller.
 *
 */
class carpetaController extends Controller
{

    /**
     * Lists all carpeta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:carpeta')->findAll();

        return $this->render('escuelaBundle:carpeta:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new carpeta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new carpeta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('carpeta_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:carpeta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a carpeta entity.
     *
     * @param carpeta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(carpeta $entity)
    {
        $form = $this->createForm(new carpetaType(), $entity, array(
            'action' => $this->generateUrl('carpeta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new carpeta entity.
     *
     */
    public function newAction()
    {
        $entity = new carpeta();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:carpeta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a carpeta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:carpeta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find carpeta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:carpeta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing carpeta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:carpeta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find carpeta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:carpeta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a carpeta entity.
    *
    * @param carpeta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(carpeta $entity)
    {
        $form = $this->createForm(new carpetaType(), $entity, array(
            'action' => $this->generateUrl('carpeta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing carpeta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:carpeta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find carpeta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('carpeta_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:carpeta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a carpeta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:carpeta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find carpeta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('carpeta'));
    }

    /**
     * Creates a form to delete a carpeta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carpeta_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
