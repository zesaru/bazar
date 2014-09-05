<?php

namespace lepru\BazarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BazarBundle:Default:index.html.twig', array('name' => $name));
    }
}
