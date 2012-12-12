<?php

namespace Ymc\HowToServiceContainerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YmcHowToServiceContainerBundle:Default:index.html.twig', array('name' => $name));
    }
}
