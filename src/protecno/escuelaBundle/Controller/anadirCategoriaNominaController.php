<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use protecno\escuelaBundle\Entity\anadirCategoriaNomina;
use protecno\escuelaBundle\Form\anadirCategoriaNominaType;

/**
 * anadirCategoriaNomina controller.
 *
 */
class anadirCategoriaNominaController extends Controller
{

    /**
     * Lists all anadirCategoriaNomina entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:anadirCategoriaNomina')->findAll();

        return $this->render('escuelaBundle:anadirCategoriaNomina:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new anadirCategoriaNomina entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new anadirCategoriaNomina();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('anadircategorianomina_show', array('id' => $entity->getId())));
        }

        return $this->render('escuelaBundle:anadirCategoriaNomina:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a anadirCategoriaNomina entity.
     *
     * @param anadirCategoriaNomina $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(anadirCategoriaNomina $entity)
    {
        $form = $this->createForm(new anadirCategoriaNominaType(), $entity, array(
            'action' => $this->generateUrl('anadircategorianomina_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new anadirCategoriaNomina entity.
     *
     */
    public function newAction()
    {
        $entity = new anadirCategoriaNomina();
        $form   = $this->createCreateForm($entity);

        return $this->render('escuelaBundle:anadirCategoriaNomina:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a anadirCategoriaNomina entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirCategoriaNomina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirCategoriaNomina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirCategoriaNomina:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing anadirCategoriaNomina entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirCategoriaNomina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirCategoriaNomina entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:anadirCategoriaNomina:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a anadirCategoriaNomina entity.
    *
    * @param anadirCategoriaNomina $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(anadirCategoriaNomina $entity)
    {
        $form = $this->createForm(new anadirCategoriaNominaType(), $entity, array(
            'action' => $this->generateUrl('anadircategorianomina_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing anadirCategoriaNomina entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:anadirCategoriaNomina')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find anadirCategoriaNomina entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('anadircategorianomina_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:anadirCategoriaNomina:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a anadirCategoriaNomina entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:anadirCategoriaNomina')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find anadirCategoriaNomina entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('anadircategorianomina'));
    }

    /**
     * Creates a form to delete a anadirCategoriaNomina entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('anadircategorianomina_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
