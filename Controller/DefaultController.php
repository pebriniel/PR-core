<?php

namespace BS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BSCoreBundle:Default:index.html.twig');
    }
}
