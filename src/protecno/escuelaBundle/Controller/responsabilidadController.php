<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\responsabilidad;
use protecno\escuelaBundle\Form\responsabilidadType;

/**
 * responsabilidad controller.
 *
 */
class responsabilidadController extends Controller
{

    /**
     * Lists all responsabilidad entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:responsabilidad')->findAll();

        return $this->render('escuelaBundle:responsabilidad:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new responsabilidad entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new responsabilidad();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('responsabilidad_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:responsabilidad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a responsabilidad entity.
     *
     * @param responsabilidad $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(responsabilidad $entity)
    {
        $form = $this->createForm(new responsabilidadType(), $entity, array(
            'action' => $this->generateUrl('responsabilidad_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new responsabilidad entity.
     *
     */
    public function newAction()
    {
        $entity = new responsabilidad();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:responsabilidad:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a responsabilidad entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:responsabilidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find responsabilidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:responsabilidad:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing responsabilidad entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:responsabilidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find responsabilidad entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:responsabilidad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a responsabilidad entity.
    *
    * @param responsabilidad $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(responsabilidad $entity)
    {
        $form = $this->createForm(new responsabilidadType(), $entity, array(
            'action' => $this->generateUrl('responsabilidad_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing responsabilidad entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:responsabilidad')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find responsabilidad entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('responsabilidad_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:responsabilidad:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a responsabilidad entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:responsabilidad')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find responsabilidad entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('responsabilidad'));
    }

    /**
     * Creates a form to delete a responsabilidad entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('responsabilidad_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
