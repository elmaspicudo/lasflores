<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use protecno\escuelaBundle\Entity\pago;
use protecno\escuelaBundle\Form\pagoType;

/**
 * pago controller.
 *
 */
class pagoController extends Controller
{

    /**
     * Lists all pago entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('escuelaBundle:pago')->findAll();

        return $this->render('escuelaBundle:pago:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new pago entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new pago();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $alumno = $em->getRepository('escuelaBundle:alumno')->find($request->request->get('hdnAlumno'));
        if($alumno){
            if ($form->isValid()) {
                $entity->setAlumno($alumno);
                $entity->setMontoDescuento($request->request->get('hdndescuento'));
                $entity->setFechaDePago(new \DateTime("now"));
                $entity->setEstatus(1);
                if($entity->getArchivo()->upload('pagos')){
                    $entity->getArchivo()->setTitulo(time());                    
                }else{
                    $entity->setArchivo(null);
                }                
                $em->persist($entity);
                $em->flush();

                return $this->redirect($this->generateUrl('pago_show', array('id' => $entity->getId())));
            }
        }
        return $this->render('escuelaBundle:pago:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a pago entity.
     *
     * @param pago $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(pago $entity)
    {
        $entity->setMontoDescuento(0);
        $form = $this->createForm(new pagoType(), $entity, array(
            'action' => $this->generateUrl('pago_create'),
            'method' => 'POST',
        ));

        
       // $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new pago entity.
     *
     */
    public function newAction()
    {
        $entity = new pago();
        $form   = $this->createCreateForm($entity);
        $em = $this->getDoctrine()->getManager();
        $cuotas = $em->getRepository('escuelaBundle:cuotaColeccion')->findAll();
        return $this->render('escuelaBundle:pago:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'cuotas'   => $cuotas,
        ));
    }

    /**
     * Finds and displays a pago entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:pago')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pago entity.');
        }

        //$deleteForm = $this->createDeleteForm($id);
        $existe = $em->getRepository('escuelaBundle:configuracionesGenerales')->find(1);
        return $this->render('escuelaBundle:pago:show.html.twig', array(
            'entity'      => $entity,
            'escuela' => $existe,
        ));
      
    }


    /**
     * Finds and displays a pago entity.
     *
     */
    public function showPdfAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:pago')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pago entity.');
        }

        //$deleteForm = $this->createDeleteForm($id);

        
        $existe = $em->getRepository('escuelaBundle:configuracionesGenerales')->find(1);
        return $this->render('escuelaBundle:pago:showpdf.html.twig', array(
            'entity'      => $entity,
            'escuela' => $existe,'server'=>$_SERVER['HTTP_HOST'],
        ));
       /* $html = $this->renderView('escuelaBundle:pago:showpdf.html.twig', array(
            'entity'      => $entity,
            'escuela' => $existe,'server'=>$_SERVER['HTTP_HOST'],
        ));

       /* return new Response(
            $this->get('knp_snappy.pdf')->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
               // 'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
        );*/
      $pdf = $this->container->get("white_october.tcpdf")->create();

        $pdf->SetAuthor('Protecno');
        $pdf->SetTitle('Recibo de pago');
        //$pdf->SetSubject('PDF Vecinos2.0');
        //$pdf->SetKeywords('TCPDF, PDF, example, test, guide');
// set default header data
//$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING);
// set header and footer fonts
//$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
//$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// set default monospaced font
//$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
//set margins
//$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
//$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
//$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
//set auto page breaks
//$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//set image scale factor
//$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//set some language-dependent strings
//$pdf->setLanguageArray($l);
// ---------------------------------------------------------
// set default font subsetting mode
        $pdf->setFontSubsetting(true);

        $pdf->SetFont('dejavusans', '', 11, '', true);

        $pdf->AddPage();
          
         
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
//
       // $nombre_pdf = $junta->getPath();
       // $pdf->Output();
    }

    
    /**
     * Displays a form to edit an existing pago entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:pago')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pago entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('escuelaBundle:pago:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a pago entity.
    *
    * @param pago $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(pago $entity)
    {
        $form = $this->createForm(new pagoType(), $entity, array(
            'action' => $this->generateUrl('pago_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing pago entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('escuelaBundle:pago')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find pago entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('pago_edit', array('id' => $id)));
        }

        return $this->render('escuelaBundle:pago:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a pago entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('escuelaBundle:pago')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find pago entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('pago'));
    }

    /**
     * Creates a form to delete a pago entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pago_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
