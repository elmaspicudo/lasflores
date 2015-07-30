<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\cuotasParticulares;
use protecno\escuelaBundle\Form\cuotasParticularesType;

/**
 * cuotasParticulares controller.
 *
 */
class cuotasParticularesController extends Controller
{

    /**
     * Lists all cuotasParticulares entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:cuotasParticulares')->findAll();

        return $this->render('escuelaBundle:cuotasParticulares:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new cuotasParticulares entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new cuotasParticulares();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cuotasparticulares_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:cuotasParticulares:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a cuotasParticulares entity.
     *
     * @param cuotasParticulares $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(cuotasParticulares $entity)
    {
        $form = $this->createForm(new cuotasParticularesType(), $entity, array(
            'action' => $this->generateUrl('cuotasparticulares_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new cuotasParticulares entity.
     *
     */
    public function newAction()
    {
        $entity = new cuotasParticulares();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:cuotasParticulares:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a cuotasParticulares entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotasParticulares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotasParticulares entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:cuotasParticulares:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing cuotasParticulares entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotasParticulares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotasParticulares entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:cuotasParticulares:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a cuotasParticulares entity.
    *
    * @param cuotasParticulares $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(cuotasParticulares $entity)
    {
        $form = $this->createForm(new cuotasParticularesType(), $entity, array(
            'action' => $this->generateUrl('cuotasparticulares_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing cuotasParticulares entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:cuotasParticulares')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find cuotasParticulares entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('cuotasparticulares_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:cuotasParticulares:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a cuotasParticulares entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:cuotasParticulares')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find cuotasParticulares entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cuotasparticulares'));
    }

    /**
     * Creates a form to delete a cuotasParticulares entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuotasparticulares_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
