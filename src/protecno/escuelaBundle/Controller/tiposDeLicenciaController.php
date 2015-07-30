<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\tiposDeLicencia;
use protecno\escuelaBundle\Form\tiposDeLicenciaType;

/**
 * tiposDeLicencia controller.
 *
 */
class tiposDeLicenciaController extends Controller
{

    /**
     * Lists all tiposDeLicencia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:tiposDeLicencia')->findAll();

        return $this->render('escuelaBundle:tiposDeLicencia:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new tiposDeLicencia entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new tiposDeLicencia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tiposdelicencia_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:tiposDeLicencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a tiposDeLicencia entity.
     *
     * @param tiposDeLicencia $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(tiposDeLicencia $entity)
    {
        $form = $this->createForm(new tiposDeLicenciaType(), $entity, array(
            'action' => $this->generateUrl('tiposdelicencia_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new tiposDeLicencia entity.
     *
     */
    public function newAction()
    {
        $entity = new tiposDeLicencia();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:tiposDeLicencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tiposDeLicencia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiposDeLicencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiposDeLicencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tiposDeLicencia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tiposDeLicencia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiposDeLicencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiposDeLicencia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:tiposDeLicencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a tiposDeLicencia entity.
    *
    * @param tiposDeLicencia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(tiposDeLicencia $entity)
    {
        $form = $this->createForm(new tiposDeLicenciaType(), $entity, array(
            'action' => $this->generateUrl('tiposdelicencia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing tiposDeLicencia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:tiposDeLicencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find tiposDeLicencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tiposdelicencia_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:tiposDeLicencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a tiposDeLicencia entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:tiposDeLicencia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find tiposDeLicencia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tiposdelicencia'));
    }

    /**
     * Creates a form to delete a tiposDeLicencia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tiposdelicencia_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
