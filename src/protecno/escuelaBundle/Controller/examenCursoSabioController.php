<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\examenCursoSabio;
use protecno\escuelaBundle\Form\examenCursoSabioType;

/**
 * examenCursoSabio controller.
 *
 */
class examenCursoSabioController extends Controller
{

    /**
     * Lists all examenCursoSabio entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:examenCursoSabio')->findAll();

        return $this->render('escuelaBundle:examenCursoSabio:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new examenCursoSabio entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new examenCursoSabio();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('examencursosabio_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:examenCursoSabio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a examenCursoSabio entity.
     *
     * @param examenCursoSabio $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(examenCursoSabio $entity)
    {
        $form = $this->createForm(new examenCursoSabioType(), $entity, array(
            'action' => $this->generateUrl('examencursosabio_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new examenCursoSabio entity.
     *
     */
    public function newAction()
    {
        $entity = new examenCursoSabio();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:examenCursoSabio:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a examenCursoSabio entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:examenCursoSabio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find examenCursoSabio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:examenCursoSabio:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing examenCursoSabio entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:examenCursoSabio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find examenCursoSabio entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:examenCursoSabio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a examenCursoSabio entity.
    *
    * @param examenCursoSabio $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(examenCursoSabio $entity)
    {
        $form = $this->createForm(new examenCursoSabioType(), $entity, array(
            'action' => $this->generateUrl('examencursosabio_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing examenCursoSabio entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:examenCursoSabio')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find examenCursoSabio entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('examencursosabio_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:examenCursoSabio:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a examenCursoSabio entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:examenCursoSabio')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find examenCursoSabio entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('examencursosabio'));
    }

    /**
     * Creates a form to delete a examenCursoSabio entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('examencursosabio_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
