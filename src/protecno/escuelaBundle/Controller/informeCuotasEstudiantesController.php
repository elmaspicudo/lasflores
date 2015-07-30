<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\informeCuotasEstudiantes;
use protecno\escuelaBundle\Form\informeCuotasEstudiantesType;

/**
 * informeCuotasEstudiantes controller.
 *
 */
class informeCuotasEstudiantesController extends Controller
{

    /**
     * Lists all informeCuotasEstudiantes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:informeCuotasEstudiantes')->findAll();

        return $this->render('escuelaBundle:informeCuotasEstudiantes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new informeCuotasEstudiantes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new informeCuotasEstudiantes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('informecuotasestudiantes_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:informeCuotasEstudiantes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a informeCuotasEstudiantes entity.
     *
     * @param informeCuotasEstudiantes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(informeCuotasEstudiantes $entity)
    {
        $form = $this->createForm(new informeCuotasEstudiantesType(), $entity, array(
            'action' => $this->generateUrl('informecuotasestudiantes_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new informeCuotasEstudiantes entity.
     *
     */
    public function newAction()
    {
        $entity = new informeCuotasEstudiantes();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:informeCuotasEstudiantes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a informeCuotasEstudiantes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:informeCuotasEstudiantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find informeCuotasEstudiantes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:informeCuotasEstudiantes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing informeCuotasEstudiantes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:informeCuotasEstudiantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find informeCuotasEstudiantes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:informeCuotasEstudiantes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a informeCuotasEstudiantes entity.
    *
    * @param informeCuotasEstudiantes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(informeCuotasEstudiantes $entity)
    {
        $form = $this->createForm(new informeCuotasEstudiantesType(), $entity, array(
            'action' => $this->generateUrl('informecuotasestudiantes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing informeCuotasEstudiantes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:informeCuotasEstudiantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find informeCuotasEstudiantes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('informecuotasestudiantes_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:informeCuotasEstudiantes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a informeCuotasEstudiantes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:informeCuotasEstudiantes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find informeCuotasEstudiantes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('informecuotasestudiantes'));
    }

    /**
     * Creates a form to delete a informeCuotasEstudiantes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('informecuotasestudiantes_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
