<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirQueja;
use protecno\escuelaBundle\Form\anadirQuejaType;

/**
 * anadirQueja controller.
 *
 */
class anadirQuejaController extends Controller
{

    /**
     * Lists all anadirQueja entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirQueja')->findAll();

        return $this->render('escuelaBundle:anadirQueja:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirQueja entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirQueja();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirqueja_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirQueja:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirQueja entity.
     *
     * @param anadirQueja $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirQueja $entity)
    {
        $form = $this->createForm(new anadirQuejaType(), $entity, array(
            'action' => $this->generateUrl('anadirqueja_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirQueja entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirQueja();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirQueja:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirQueja entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirQueja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirQueja entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirQueja:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirQueja entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirQueja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirQueja entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirQueja:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirQueja entity.
    *
    * @param anadirQueja $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirQueja $entity)
    {
        $form = $this->createForm(new anadirQuejaType(), $entity, array(
            'action' => $this->generateUrl('anadirqueja_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirQueja entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirQueja')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirQueja entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadirqueja_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirQueja:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirQueja entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirQueja')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirQueja entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadirqueja'));
    }

    /**
     * Creates a form to delete a anadirQueja entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadirqueja_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
