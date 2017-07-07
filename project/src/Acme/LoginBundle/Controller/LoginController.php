<?php

namespace Acme\LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController
{
    /*public function indexAction($name)
    {
        return $this->render('AcmeLoginBundle:Login:index.html.twig', array('name' => $name));
    }*/
	public function indexAction($name)
    {
        return new Response('<html><body>Hello '.$name.'!</body></html>');
    }
}
