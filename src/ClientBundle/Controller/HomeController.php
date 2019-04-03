<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Client/Base/index.html.twig');
    }
}
