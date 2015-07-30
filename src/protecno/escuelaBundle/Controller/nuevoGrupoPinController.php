<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\nuevoGrupoPin;
use protecno\escuelaBundle\Form\nuevoGrupoPinType;

/**
 * nuevoGrupoPin controller.
 *
 */
class nuevoGrupoPinController extends Controller
{

    /**
     * Lists all nuevoGrupoPin entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:nuevoGrupoPin')->findAll();

        return $this->render('escuelaBundle:nuevoGrupoPin:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new nuevoGrupoPin entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new nuevoGrupoPin();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('nuevogrupopin_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:nuevoGrupoPin:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a nuevoGrupoPin entity.
     *
     * @param nuevoGrupoPin $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(nuevoGrupoPin $entity)
    {
        $form = $this->createForm(new nuevoGrupoPinType(), $entity, array(
            'action' => $this->generateUrl('nuevogrupopin_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new nuevoGrupoPin entity.
     *
     */
    public function newAction()
    {
        $entity = new nuevoGrupoPin();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:nuevoGrupoPin:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nuevoGrupoPin entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevoGrupoPin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevoGrupoPin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nuevoGrupoPin:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nuevoGrupoPin entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevoGrupoPin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevoGrupoPin entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:nuevoGrupoPin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a nuevoGrupoPin entity.
    *
    * @param nuevoGrupoPin $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(nuevoGrupoPin $entity)
    {
        $form = $this->createForm(new nuevoGrupoPinType(), $entity, array(
            'action' => $this->generateUrl('nuevogrupopin_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing nuevoGrupoPin entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:nuevoGrupoPin')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find nuevoGrupoPin entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('nuevogrupopin_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:nuevoGrupoPin:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a nuevoGrupoPin entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:nuevoGrupoPin')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find nuevoGrupoPin entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('nuevogrupopin'));
    }

    /**
     * Creates a form to delete a nuevoGrupoPin entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nuevogrupopin_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
