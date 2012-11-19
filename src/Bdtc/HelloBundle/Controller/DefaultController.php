<?php

namespace Bdtc\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
       // return $this->render('BdtcHelloBundle:Default:index.html.twig', array('name' => $name));
    	return $this->render('BdtcHelloBundle:Default:index.html.twig');
    }
}
