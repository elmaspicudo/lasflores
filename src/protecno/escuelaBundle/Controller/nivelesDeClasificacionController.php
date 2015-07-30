<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\nivelesDeClasificacion;
use protecno\escuelaBundle\Form\nivelesDeClasificacionType;

/**
 * nivelesDeClasificacion controller.
 *
 */
class nivelesDeClasificacionController extends Controller
{

    /**
     * Lists all nivelesDeClasificacion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:nivelesDeClasificacion')->findAll();

        return $this->render('escuelaBundle:nivelesDeClasificacion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new nivelesDeClasificacion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new nivelesDeClasificacion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nivelesdeclasificacion_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:nivelesDeClasificacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a nivelesDeClasificacion entity.
     *
     * @param nivelesDeClasificacion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(nivelesDeClasificacion $entity)
    {
        $form = $this->createForm(new nivelesDeClasificacionType(), $entity, array(
            'action' => $this->generateUrl('nivelesdeclasificacion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new nivelesDeClasificacion entity.
     *
     */
    public function newAction()
    {
        $entity = new nivelesDeClasificacion();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:nivelesDeClasificacion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nivelesDeClasificacion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nivelesDeClasificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nivelesDeClasificacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nivelesDeClasificacion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nivelesDeClasificacion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nivelesDeClasificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nivelesDeClasificacion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nivelesDeClasificacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a nivelesDeClasificacion entity.
    *
    * @param nivelesDeClasificacion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(nivelesDeClasificacion $entity)
    {
        $form = $this->createForm(new nivelesDeClasificacionType(), $entity, array(
            'action' => $this->generateUrl('nivelesdeclasificacion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing nivelesDeClasificacion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nivelesDeClasificacion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nivelesDeClasificacion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('nivelesdeclasificacion_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:nivelesDeClasificacion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a nivelesDeClasificacion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:nivelesDeClasificacion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find nivelesDeClasificacion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nivelesdeclasificacion'));
    }

    /**
     * Creates a form to delete a nivelesDeClasificacion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nivelesdeclasificacion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
