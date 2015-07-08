<?php

namespace protecno\escuelaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('escuelaBundle:Default:index.html.twig', array('name' => $name));
    }
}
