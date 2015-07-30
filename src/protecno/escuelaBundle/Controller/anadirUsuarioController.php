<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirUsuario;
use protecno\escuelaBundle\Form\anadirUsuarioType;

/**
 * anadirUsuario controller.
 *
 */
class anadirUsuarioController extends Controller
{

    /**
     * Lists all anadirUsuario entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirUsuario')->findAll();

        return $this->render('escuelaBundle:anadirUsuario:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirUsuario entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirUsuario();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
       
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $role = $em->getRepository('escuelaBundle:role')->find($entity->getRole());
            $entity->addRole($role );
            $this->setSecurePassword($entity);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirusuario_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirUsuario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirUsuario entity.
     *
     * @param anadirUsuario $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirUsuario $entity)
    {
        $form = $this->createForm(new anadirUsuarioType(), $entity, array(
            'action' => $this->generateUrl('anadirusuario_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirUsuario entity.
     *
     */
    public function newAction($idperfil,$role)
    {
        $entity = new anadirUsuario();
      //  $em = $this->getDoctrine()->getManager();
        $entity->setRole($role );;
        $entity->setIdPerfil($idperfil);
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirUsuario:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirUsuario entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirUsuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirUsuario:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirUsuario entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirUsuario entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirUsuario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirUsuario entity.
    *
    * @param anadirUsuario $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirUsuario $entity)
    {
        $form = $this->createForm(new anadirUsuarioType(), $entity, array(
            'action' => $this->generateUrl('anadirusuario_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirUsuario entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirUsuario')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirUsuario entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $this->setSecurePassword($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadirusuario_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirUsuario:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirUsuario entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirUsuario')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirUsuario entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadirusuario'));
    }

    /**
     * Creates a form to delete a anadirUsuario entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadirusuario_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }

    private function setSecurePassword(&$entity) {
        $entity->setSalt(md5(time()));
        $encoder = new \Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder('sha512', true, 10);
        $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
        $entity->setPassword($password);
    }
}
