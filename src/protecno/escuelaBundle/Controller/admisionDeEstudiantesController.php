<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\admisionDeEstudiantes;
use protecno\escuelaBundle\Form\admisionDeEstudiantesType;
use protecno\escuelaBundle\Entity\detallesDeContacto;
use protecno\escuelaBundle\Form\detallesDeContactoType;
/**
 * admisionDeEstudiantes controller.
 *
 */
class admisionDeEstudiantesController extends Controller
{

    /**
     * Lists all admisionDeEstudiantes entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:admisionDeEstudiantes')->findAll();

        return $this->render('escuelaBundle:admisionDeEstudiantes:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new admisionDeEstudiantes entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new admisionDeEstudiantes();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $alumno=$request->request->get('hdnAlumno', 0);
        if($alumno>0){
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $detallesDeContacto=$em->getRepository('escuelaBundle:detallesDeContacto')->find($alumno);
                $entity->setDetallesDeContacto($detallesDeContacto);
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('admisiondeestudiantes_show', array('id' => $entity->getId())));
            }
        }

        return $this->render('escuelaBundle:admisionDeEstudiantes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'error'=>$alumno
        ));
    }

    /**
     * Creates a form to create a admisionDeEstudiantes entity.
     *
     * @param admisionDeEstudiantes $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(admisionDeEstudiantes $entity)
    {
        $form = $this->createForm(new admisionDeEstudiantesType(), $entity, array(
            'action' => $this->generateUrl('admisiondeestudiantes_create'),
            'method' => 'POST',
        ));

       // $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new admisionDeEstudiantes entity.
     *
     */
    public function newAction()
    {
        $entity = new admisionDeEstudiantes();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:admisionDeEstudiantes:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a admisionDeEstudiantes entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:admisionDeEstudiantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find admisionDeEstudiantes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:admisionDeEstudiantes:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing admisionDeEstudiantes entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:admisionDeEstudiantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find admisionDeEstudiantes entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:admisionDeEstudiantes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a admisionDeEstudiantes entity.
    *
    * @param admisionDeEstudiantes $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(admisionDeEstudiantes $entity)
    {
        $form = $this->createForm(new admisionDeEstudiantesType(), $entity, array(
            'action' => $this->generateUrl('admisiondeestudiantes_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing admisionDeEstudiantes entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:admisionDeEstudiantes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find admisionDeEstudiantes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('admisiondeestudiantes_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:admisionDeEstudiantes:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a admisionDeEstudiantes entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:admisionDeEstudiantes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find admisionDeEstudiantes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admisiondeestudiantes'));
    }

    /**
     * Creates a form to delete a admisionDeEstudiantes entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admisiondeestudiantes_delete', array('id' => $id)))
            ->setMethod('DELETE')
           // ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
