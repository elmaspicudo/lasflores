<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\estructuraDeTarifas;
use protecno\escuelaBundle\Form\estructuraDeTarifasType;

/**
 * estructuraDeTarifas controller.
 *
 */
class estructuraDeTarifasController extends Controller
{

    /**
     * Lists all estructuraDeTarifas entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:estructuraDeTarifas')->findAll();

        return $this->render('escuelaBundle:estructuraDeTarifas:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new estructuraDeTarifas entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new estructuraDeTarifas();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('estructuradetarifas_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:estructuraDeTarifas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a estructuraDeTarifas entity.
     *
     * @param estructuraDeTarifas $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(estructuraDeTarifas $entity)
    {
        $form = $this->createForm(new estructuraDeTarifasType(), $entity, array(
            'action' => $this->generateUrl('estructuradetarifas_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new estructuraDeTarifas entity.
     *
     */
    public function newAction()
    {
        $entity = new estructuraDeTarifas();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:estructuraDeTarifas:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a estructuraDeTarifas entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:estructuraDeTarifas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find estructuraDeTarifas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:estructuraDeTarifas:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing estructuraDeTarifas entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:estructuraDeTarifas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find estructuraDeTarifas entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:estructuraDeTarifas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a estructuraDeTarifas entity.
    *
    * @param estructuraDeTarifas $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(estructuraDeTarifas $entity)
    {
        $form = $this->createForm(new estructuraDeTarifasType(), $entity, array(
            'action' => $this->generateUrl('estructuradetarifas_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing estructuraDeTarifas entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:estructuraDeTarifas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find estructuraDeTarifas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('estructuradetarifas_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:estructuraDeTarifas:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a estructuraDeTarifas entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:estructuraDeTarifas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find estructuraDeTarifas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('estructuradetarifas'));
    }

    /**
     * Creates a form to delete a estructuraDeTarifas entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('estructuradetarifas_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
