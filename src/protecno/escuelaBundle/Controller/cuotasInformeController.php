<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\cuotasInforme;
use protecno\escuelaBundle\Form\cuotasInformeType;

/**
 * cuotasInforme controller.
 *
 */
class cuotasInformeController extends Controller
{

    /**
     * Lists all cuotasInforme entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:cuotasInforme')->findAll();

        return $this->render('escuelaBundle:cuotasInforme:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new cuotasInforme entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new cuotasInforme();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cuotasinforme_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:cuotasInforme:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a cuotasInforme entity.
     *
     * @param cuotasInforme $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(cuotasInforme $entity)
    {
        $form = $this->createForm(new cuotasInformeType(), $entity, array(
            'action' => $this->generateUrl('cuotasinforme_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new cuotasInforme entity.
     *
     */
    public function newAction()
    {
        $entity = new cuotasInforme();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:cuotasInforme:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cuotasInforme entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotasInforme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotasInforme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:cuotasInforme:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cuotasInforme entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotasInforme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotasInforme entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:cuotasInforme:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a cuotasInforme entity.
    *
    * @param cuotasInforme $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(cuotasInforme $entity)
    {
        $form = $this->createForm(new cuotasInformeType(), $entity, array(
            'action' => $this->generateUrl('cuotasinforme_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing cuotasInforme entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotasInforme')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotasInforme entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cuotasinforme_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:cuotasInforme:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a cuotasInforme entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:cuotasInforme')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find cuotasInforme entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cuotasinforme'));
    }

    /**
     * Creates a form to delete a cuotasInforme entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuotasinforme_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
