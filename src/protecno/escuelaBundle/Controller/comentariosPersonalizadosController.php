<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\comentariosPersonalizados;
use protecno\escuelaBundle\Form\comentariosPersonalizadosType;

/**
 * comentariosPersonalizados controller.
 *
 */
class comentariosPersonalizadosController extends Controller
{

    /**
     * Lists all comentariosPersonalizados entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:comentariosPersonalizados')->findAll();

        return $this->render('escuelaBundle:comentariosPersonalizados:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new comentariosPersonalizados entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new comentariosPersonalizados();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('comentariospersonalizados_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:comentariosPersonalizados:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a comentariosPersonalizados entity.
     *
     * @param comentariosPersonalizados $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(comentariosPersonalizados $entity)
    {
        $form = $this->createForm(new comentariosPersonalizadosType(), $entity, array(
            'action' => $this->generateUrl('comentariospersonalizados_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new comentariosPersonalizados entity.
     *
     */
    public function newAction()
    {
        $entity = new comentariosPersonalizados();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:comentariosPersonalizados:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a comentariosPersonalizados entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:comentariosPersonalizados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find comentariosPersonalizados entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:comentariosPersonalizados:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing comentariosPersonalizados entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:comentariosPersonalizados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find comentariosPersonalizados entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:comentariosPersonalizados:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a comentariosPersonalizados entity.
    *
    * @param comentariosPersonalizados $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(comentariosPersonalizados $entity)
    {
        $form = $this->createForm(new comentariosPersonalizadosType(), $entity, array(
            'action' => $this->generateUrl('comentariospersonalizados_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing comentariosPersonalizados entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:comentariosPersonalizados')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find comentariosPersonalizados entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('comentariospersonalizados_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:comentariosPersonalizados:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a comentariosPersonalizados entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:comentariosPersonalizados')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find comentariosPersonalizados entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('comentariospersonalizados'));
    }

    /**
     * Creates a form to delete a comentariosPersonalizados entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('comentariospersonalizados_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
