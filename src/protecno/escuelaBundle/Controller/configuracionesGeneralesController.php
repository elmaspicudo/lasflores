<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\configuracionesGenerales;
use protecno\escuelaBundle\Form\configuracionesGeneralesType;

/**
 * configuracionesGenerales controller.
 *
 */
class configuracionesGeneralesController extends Controller
{

    /**
     * Lists all configuracionesGenerales entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:configuracionesGenerales')->findAll();

        return $this->render('escuelaBundle:configuracionesGenerales:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new configuracionesGenerales entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new configuracionesGenerales();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('configuracionesgenerales_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:configuracionesGenerales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a configuracionesGenerales entity.
     *
     * @param configuracionesGenerales $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(configuracionesGenerales $entity)
    {
        $form = $this->createForm(new configuracionesGeneralesType(), $entity, array(
            'action' => $this->generateUrl('configuracionesgenerales_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new configuracionesGenerales entity.
     *
     */
    public function newAction()
    {
        $entity = new configuracionesGenerales();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:configuracionesGenerales:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a configuracionesGenerales entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:configuracionesGenerales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find configuracionesGenerales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:configuracionesGenerales:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing configuracionesGenerales entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:configuracionesGenerales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find configuracionesGenerales entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:configuracionesGenerales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a configuracionesGenerales entity.
    *
    * @param configuracionesGenerales $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(configuracionesGenerales $entity)
    {
        $form = $this->createForm(new configuracionesGeneralesType(), $entity, array(
            'action' => $this->generateUrl('configuracionesgenerales_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing configuracionesGenerales entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:configuracionesGenerales')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find configuracionesGenerales entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('configuracionesgenerales_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:configuracionesGenerales:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a configuracionesGenerales entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:configuracionesGenerales')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find configuracionesGenerales entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('configuracionesgenerales'));
    }

    /**
     * Creates a form to delete a configuracionesGenerales entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('configuracionesgenerales_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
