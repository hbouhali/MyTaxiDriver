<?php

namespace GTaxi\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GTaxiTaxiDriverBundle:Default:layout.html.twig', array('name' => $name));
    }
}
