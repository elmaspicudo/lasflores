<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirCurso;
use protecno\escuelaBundle\Form\anadirCursoType;

/**
 * anadirCurso controller.
 *
 */
class anadirCursoController extends Controller
{

    /**
     * Lists all anadirCurso entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirCurso')->findAll();

        return $this->render('escuelaBundle:anadirCurso:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirCurso entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirCurso();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadircurso_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirCurso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirCurso entity.
     *
     * @param anadirCurso $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirCurso $entity)
    {
        $form = $this->createForm(new anadirCursoType(), $entity, array(
            'action' => $this->generateUrl('anadircurso_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirCurso entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirCurso();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirCurso:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirCurso entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirCurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirCurso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirCurso:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirCurso entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirCurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirCurso entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirCurso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirCurso entity.
    *
    * @param anadirCurso $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirCurso $entity)
    {
        $form = $this->createForm(new anadirCursoType(), $entity, array(
            'action' => $this->generateUrl('anadircurso_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirCurso entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirCurso')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirCurso entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadircurso_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirCurso:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirCurso entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirCurso')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirCurso entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadircurso'));
    }

    /**
     * Creates a form to delete a anadirCurso entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadircurso_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
