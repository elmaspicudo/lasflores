<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirDepartamentoEmpleo;
use protecno\escuelaBundle\Form\anadirDepartamentoEmpleoType;

/**
 * anadirDepartamentoEmpleo controller.
 *
 */
class anadirDepartamentoEmpleoController extends Controller
{

    /**
     * Lists all anadirDepartamentoEmpleo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirDepartamentoEmpleo')->findAll();

        return $this->render('escuelaBundle:anadirDepartamentoEmpleo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirDepartamentoEmpleo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirDepartamentoEmpleo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirdepartamentoempleo_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirDepartamentoEmpleo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirDepartamentoEmpleo entity.
     *
     * @param anadirDepartamentoEmpleo $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirDepartamentoEmpleo $entity)
    {
        $form = $this->createForm(new anadirDepartamentoEmpleoType(), $entity, array(
            'action' => $this->generateUrl('anadirdepartamentoempleo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirDepartamentoEmpleo entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirDepartamentoEmpleo();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirDepartamentoEmpleo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirDepartamentoEmpleo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirDepartamentoEmpleo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirDepartamentoEmpleo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirDepartamentoEmpleo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirDepartamentoEmpleo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirDepartamentoEmpleo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirDepartamentoEmpleo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirDepartamentoEmpleo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirDepartamentoEmpleo entity.
    *
    * @param anadirDepartamentoEmpleo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirDepartamentoEmpleo $entity)
    {
        $form = $this->createForm(new anadirDepartamentoEmpleoType(), $entity, array(
            'action' => $this->generateUrl('anadirdepartamentoempleo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirDepartamentoEmpleo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirDepartamentoEmpleo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirDepartamentoEmpleo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadirdepartamentoempleo_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirDepartamentoEmpleo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirDepartamentoEmpleo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirDepartamentoEmpleo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirDepartamentoEmpleo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadirdepartamentoempleo'));
    }

    /**
     * Creates a form to delete a anadirDepartamentoEmpleo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadirdepartamentoempleo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
