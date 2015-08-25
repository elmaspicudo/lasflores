<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\admisionDelEmpleado;
use protecno\escuelaBundle\Form\admisionDelEmpleadoType;

/**
 * admisionDelEmpleado controller.
 *
 */
class admisionDelEmpleadoController extends Controller
{

    /**
     * Lists all admisionDelEmpleado entities.
     *
     */ 
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:admisionDelEmpleado')->findAll();

        return $this->render('escuelaBundle:admisionDelEmpleado:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new admisionDelEmpleado entity.
     *
     */
    public function createAction(Request $request)
    {
       // print_r($request);
        $entity = new admisionDelEmpleado();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        /*$entity->setDiaDeIngreso(new \DateTime('@'.$entity->getDiaDeIngreso()));
        $entity->setFechaDeNacimiento(new \DateTime('@'.$entity->getFechaDeNacimiento()));
        $entity->setExperienciaTotal(new \DateTime('@'.$entity->getExperienciaTotal()));*/
       // echo $entity->getDiaDeIngreso();
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->getArchivo()->setTitulo(urlencode($entity->getNombre()));
            $entity->getArchivo()->upload('empleados');
            //$entity->getArchivo()->setFechaDeAdmision(new \DateTime("now"));
            $em->persist($entity);
            $em->flush();
 
            return $this->redirect($this->generateUrl('admisiondelempleado_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:admisionDelEmpleado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a admisionDelEmpleado entity.
     *
     * @param admisionDelEmpleado $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(admisionDelEmpleado $entity)
    {
        $form = $this->createForm(new admisionDelEmpleadoType(), $entity, array(
            'action' => $this->generateUrl('admisiondelempleado_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new admisionDelEmpleado entity.
     *
     */
    public function newAction()
    {
        $entity = new admisionDelEmpleado();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:admisionDelEmpleado:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a admisionDelEmpleado entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:admisionDelEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find admisionDelEmpleado entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:admisionDelEmpleado:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing admisionDelEmpleado entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:admisionDelEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find admisionDelEmpleado entity.');
        }

       /* $entity->setDiaDeIngreso($entity->getDiaDeIngreso()->getTimestamp());
        $entity->setFechaDeNacimiento($entity->getFechaDeNacimiento()->getTimestamp());
        $entity->setExperienciaTotal($entity->getExperienciaTotal()->getTimestamp());
*/
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:admisionDelEmpleado:edit.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a admisionDelEmpleado entity.
    *
    * @param admisionDelEmpleado $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(admisionDelEmpleado $entity)
    {
        $form = $this->createForm(new admisionDelEmpleadoType(), $entity, array(
            'action' => $this->generateUrl('admisiondelempleado_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing admisionDelEmpleado entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:admisionDelEmpleado')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find admisionDelEmpleado entity.');
        }
      
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {      
            if($entity->getArchivo()){
                $entity->getArchivo()->setTitulo(urlencode($entity->getNombre()));
                $entity->getArchivo()->upload('empleados');   
            }   
            $em->flush();

            return $this->redirect($this->generateUrl('admisiondelempleado_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:admisionDelEmpleado:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a admisionDelEmpleado entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:admisionDelEmpleado')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find admisionDelEmpleado entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('admisiondelempleado'));
    }

    /**
     * Creates a form to delete a admisionDelEmpleado entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('admisiondelempleado_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
