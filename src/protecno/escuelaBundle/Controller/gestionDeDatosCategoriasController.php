<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\gestionDeDatosCategorias;
use protecno\escuelaBundle\Form\gestionDeDatosCategoriasType;

/**
 * gestionDeDatosCategorias controller.
 *
 */
class gestionDeDatosCategoriasController extends Controller
{

    /**
     * Lists all gestionDeDatosCategorias entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:gestionDeDatosCategorias')->findAll();

        return $this->render('escuelaBundle:gestionDeDatosCategorias:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new gestionDeDatosCategorias entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new gestionDeDatosCategorias();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('gestiondedatoscategorias_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:gestionDeDatosCategorias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a gestionDeDatosCategorias entity.
     *
     * @param gestionDeDatosCategorias $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(gestionDeDatosCategorias $entity)
    {
        $form = $this->createForm(new gestionDeDatosCategoriasType(), $entity, array(
            'action' => $this->generateUrl('gestiondedatoscategorias_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new gestionDeDatosCategorias entity.
     *
     */
    public function newAction()
    {
        $entity = new gestionDeDatosCategorias();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:gestionDeDatosCategorias:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a gestionDeDatosCategorias entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:gestionDeDatosCategorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find gestionDeDatosCategorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:gestionDeDatosCategorias:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing gestionDeDatosCategorias entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:gestionDeDatosCategorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find gestionDeDatosCategorias entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:gestionDeDatosCategorias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a gestionDeDatosCategorias entity.
    *
    * @param gestionDeDatosCategorias $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(gestionDeDatosCategorias $entity)
    {
        $form = $this->createForm(new gestionDeDatosCategoriasType(), $entity, array(
            'action' => $this->generateUrl('gestiondedatoscategorias_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing gestionDeDatosCategorias entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:gestionDeDatosCategorias')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find gestionDeDatosCategorias entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('gestiondedatoscategorias_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:gestionDeDatosCategorias:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a gestionDeDatosCategorias entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:gestionDeDatosCategorias')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find gestionDeDatosCategorias entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('gestiondedatoscategorias'));
    }

    /**
     * Creates a form to delete a gestionDeDatosCategorias entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('gestiondedatoscategorias_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
