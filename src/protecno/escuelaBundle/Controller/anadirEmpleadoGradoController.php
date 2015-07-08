<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirEmpleadoGrado;
use protecno\escuelaBundle\Form\anadirEmpleadoGradoType;

/**
 * anadirEmpleadoGrado controller.
 *
 */
class anadirEmpleadoGradoController extends Controller
{

    /**
     * Lists all anadirEmpleadoGrado entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirEmpleadoGrado')->findAll();

        return $this->render('escuelaBundle:anadirEmpleadoGrado:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirEmpleadoGrado entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirEmpleadoGrado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirempleadogrado_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirEmpleadoGrado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirEmpleadoGrado entity.
     *
     * @param anadirEmpleadoGrado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirEmpleadoGrado $entity)
    {
        $form = $this->createForm(new anadirEmpleadoGradoType(), $entity, array(
            'action' => $this->generateUrl('anadirempleadogrado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirEmpleadoGrado entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirEmpleadoGrado();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirEmpleadoGrado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirEmpleadoGrado entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoGrado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoGrado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirEmpleadoGrado:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirEmpleadoGrado entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoGrado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoGrado entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirEmpleadoGrado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirEmpleadoGrado entity.
    *
    * @param anadirEmpleadoGrado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirEmpleadoGrado $entity)
    {
        $form = $this->createForm(new anadirEmpleadoGradoType(), $entity, array(
            'action' => $this->generateUrl('anadirempleadogrado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirEmpleadoGrado entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirEmpleadoGrado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirEmpleadoGrado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadirempleadogrado_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirEmpleadoGrado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirEmpleadoGrado entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirEmpleadoGrado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirEmpleadoGrado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadirempleadogrado'));
    }

    /**
     * Creates a form to delete a anadirEmpleadoGrado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadirempleadogrado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
