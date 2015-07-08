<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirDetallesDelBanco;
use protecno\escuelaBundle\Form\anadirDetallesDelBancoType;

/**
 * anadirDetallesDelBanco controller.
 *
 */
class anadirDetallesDelBancoController extends Controller
{

    /**
     * Lists all anadirDetallesDelBanco entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirDetallesDelBanco')->findAll();

        return $this->render('escuelaBundle:anadirDetallesDelBanco:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirDetallesDelBanco entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirDetallesDelBanco();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirdetallesdelbanco_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirDetallesDelBanco:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirDetallesDelBanco entity.
     *
     * @param anadirDetallesDelBanco $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirDetallesDelBanco $entity)
    {
        $form = $this->createForm(new anadirDetallesDelBancoType(), $entity, array(
            'action' => $this->generateUrl('anadirdetallesdelbanco_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirDetallesDelBanco entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirDetallesDelBanco();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirDetallesDelBanco:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirDetallesDelBanco entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirDetallesDelBanco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirDetallesDelBanco entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirDetallesDelBanco:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirDetallesDelBanco entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirDetallesDelBanco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirDetallesDelBanco entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirDetallesDelBanco:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirDetallesDelBanco entity.
    *
    * @param anadirDetallesDelBanco $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirDetallesDelBanco $entity)
    {
        $form = $this->createForm(new anadirDetallesDelBancoType(), $entity, array(
            'action' => $this->generateUrl('anadirdetallesdelbanco_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirDetallesDelBanco entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirDetallesDelBanco')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirDetallesDelBanco entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadirdetallesdelbanco_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirDetallesDelBanco:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirDetallesDelBanco entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirDetallesDelBanco')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirDetallesDelBanco entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadirdetallesdelbanco'));
    }

    /**
     * Creates a form to delete a anadirDetallesDelBanco entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadirdetallesdelbanco_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
