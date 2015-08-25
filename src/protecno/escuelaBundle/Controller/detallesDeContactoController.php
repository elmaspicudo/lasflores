<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
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
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
                       
        }else{
             $em = $this->getDoctrine()->getManager();
             $usuario= $em->getRepository('escuelaBundle:anadirUsuario')->find($user->getId());                   
        }
        $entity = new detallesDeContacto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->getAlumno()->setFechaDeAdmision(new \DateTime("now"));
            $entity->getAlumno()->setAgrego($usuario);
            $entity->getAlumno()->getArchivo()->setTitulo(urlencode($entity->getAlumno()->getNombre()));
            $entity->getAlumno()->getArchivo()->upload('alumnos');
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
     * Creates a new detallesDeContacto entity.
     *
     */
    public function createAjaxAction(Request $request)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
                       
        }else{
             $em = $this->getDoctrine()->getManager();
             $usuario= $em->getRepository('escuelaBundle:anadirUsuario')->find($user->getId());                   
        }
        $entity = new detallesDeContacto();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $entity->getAlumno()->setFechaDeAdmision(new \DateTime("now"));
            $entity->getAlumno()->setAgrego($usuario);
            $entity->getAlumno()->getArchivo()->setTitulo(urlencode($entity->getAlumno()->getNombre()));
            $entity->getAlumno()->getArchivo()->upload('alumnos');
            $em->persist($entity);
            $em->flush();
             return $this->render('escuelaBundle:detallesDeContacto:detallesdecontacto_close.html.twig', array(
            'id' => $entity->getId(),
                 ));
            //return $this->redirect($this->generateUrl('detallesdecontacto_close', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:detallesDeContacto:new_ajax.html.twig', array(
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
    private function createAjaxCreateForm(detallesDeContacto $entity)
    {
        $form = $this->createForm(new detallesDeContactoType(), $entity, array(
            'action' => $this->generateUrl('detallesdecontacto_create_ajax'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new detallesDeContacto entity.
     *
     */
    public function newAjaxAction()
    {
        $entity = new detallesDeContacto();
        $form   = $this->createAjaxCreateForm($entity);

        return $this->render('escuelaBundle:detallesDeContacto:new_ajax.html.twig', array(
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
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing detallesDeContacto entity via ajax.
     *
     */
    public function editAjaxAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:detallesDeContacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find detallesDeContacto entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        $body=$this->renderView('escuelaBundle:detallesDeContacto:edit_ajax.html.twig', array(
                                    'entity'      => $entity,
                                    'form'   => $editForm->createView(),
                                    'delete_form' => $deleteForm->createView(),
                                ));
        $response = new Response(json_encode(array('success' => true,'body'=>$body)));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
       
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
        $user = $this->container->get('security.context')->getToken()->getUser();
        if($user=='anon.'){
                       
        }else{
              $usuario= $em->getRepository('escuelaBundle:anadirUsuario')->find($user->getId());                   
        }
        $entity = $em->getRepository('escuelaBundle:detallesDeContacto')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find detallesDeContacto entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        $entity->getAlumno()->setModifico($usuario);
        if($entity->getAlumno()->getArchivo()){
                $entity->getAlumno()->getArchivo()->setTitulo(urlencode($entity->getAlumno()->getNombre()));
                $entity->getAlumno()->getArchivo()->upload('alumnos');   
            }   
       
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
