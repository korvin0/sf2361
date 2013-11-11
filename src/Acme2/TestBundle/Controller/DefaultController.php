<?php

namespace Acme2\TestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('Acme2TestBundle:Default:index.html.twig', array('name' => $name));
    }
}
