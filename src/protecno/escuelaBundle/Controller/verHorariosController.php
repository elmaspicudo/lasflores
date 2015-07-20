<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\verHorarios;
use protecno\escuelaBundle\Form\verHorariosType;

/**
 * verHorarios controller.
 *
 */
class verHorariosController extends Controller
{

    /**
     * Lists all verHorarios entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:verHorarios')->findAll();

        return $this->render('escuelaBundle:verHorarios:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new verHorarios entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new verHorarios();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('verhorarios_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:verHorarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a verHorarios entity.
     *
     * @param verHorarios $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(verHorarios $entity)
    {
        $form = $this->createForm(new verHorariosType(), $entity, array(
            'action' => $this->generateUrl('verhorarios_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new verHorarios entity.
     *
     */
    public function newAction()
    {
        $entity = new verHorarios();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:verHorarios:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a verHorarios entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:verHorarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find verHorarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:verHorarios:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing verHorarios entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:verHorarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find verHorarios entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:verHorarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a verHorarios entity.
    *
    * @param verHorarios $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(verHorarios $entity)
    {
        $form = $this->createForm(new verHorariosType(), $entity, array(
            'action' => $this->generateUrl('verhorarios_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing verHorarios entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:verHorarios')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find verHorarios entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('verhorarios_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:verHorarios:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a verHorarios entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:verHorarios')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find verHorarios entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('verhorarios'));
    }

    /**
     * Creates a form to delete a verHorarios entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('verhorarios_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
