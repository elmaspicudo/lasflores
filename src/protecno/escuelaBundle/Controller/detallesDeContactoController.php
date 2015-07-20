<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\detallesDeContacto;
use protecno\escuelaBundle\Form\detallesDeContactoType;

/**
 * detallesDeContacto controller.
 *
 */
class detallesDeContactoController extends Controller
{

    /**
     * Lists all detallesDeContacto entities.
     *
     */ 
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:detallesDeContacto')->findAll();

        return $this->render('escuelaBundle:detallesDeContacto:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new detallesDeContacto entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new detallesDeContacto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->getAlumno()->setFechaDeAdmision(new \DateTime("now"));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('detallesdecontacto_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:detallesDeContacto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a detallesDeContacto entity.
     *
     * @param detallesDeContacto $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(detallesDeContacto $entity)
    {
        $form = $this->createForm(new detallesDeContactoType(), $entity, array(
            'action' => $this->generateUrl('detallesdecontacto_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new detallesDeContacto entity.
     *
     */
    public function newAction()
    {
        $entity = new detallesDeContacto();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:detallesDeContacto:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a detallesDeContacto entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:detallesDeContacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find detallesDeContacto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:detallesDeContacto:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing detallesDeContacto entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:detallesDeContacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find detallesDeContacto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:detallesDeContacto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a detallesDeContacto entity.
    *
    * @param detallesDeContacto $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(detallesDeContacto $entity)
    {
        $form = $this->createForm(new detallesDeContactoType(), $entity, array(
            'action' => $this->generateUrl('detallesdecontacto_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing detallesDeContacto entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:detallesDeContacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find detallesDeContacto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('detallesdecontacto_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:detallesDeContacto:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a detallesDeContacto entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:detallesDeContacto')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find detallesDeContacto entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('detallesdecontacto'));
    }

    /**
     * Creates a form to delete a detallesDeContacto entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('detallesdecontacto_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
