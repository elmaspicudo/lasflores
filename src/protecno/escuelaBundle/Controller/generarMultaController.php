<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\generarMulta;
use protecno\escuelaBundle\Form\generarMultaType;

/**
 * generarMulta controller.
 *
 */
class generarMultaController extends Controller
{

    /**
     * Lists all generarMulta entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:generarMulta')->findAll();

        return $this->render('escuelaBundle:generarMulta:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new generarMulta entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new generarMulta();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('generarmulta_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:generarMulta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a generarMulta entity.
     *
     * @param generarMulta $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(generarMulta $entity)
    {
        $form = $this->createForm(new generarMultaType(), $entity, array(
            'action' => $this->generateUrl('generarmulta_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new generarMulta entity.
     *
     */
    public function newAction()
    {
        $entity = new generarMulta();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:generarMulta:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a generarMulta entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:generarMulta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find generarMulta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:generarMulta:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing generarMulta entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:generarMulta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find generarMulta entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:generarMulta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a generarMulta entity.
    *
    * @param generarMulta $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(generarMulta $entity)
    {
        $form = $this->createForm(new generarMultaType(), $entity, array(
            'action' => $this->generateUrl('generarmulta_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing generarMulta entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:generarMulta')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find generarMulta entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('generarmulta_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:generarMulta:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a generarMulta entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:generarMulta')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find generarMulta entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('generarmulta'));
    }

    /**
     * Creates a form to delete a generarMulta entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('generarmulta_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
