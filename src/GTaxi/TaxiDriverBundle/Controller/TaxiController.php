<?php

namespace GTaxi\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TaxiController extends Controller
{
    public function indexAction()
    {
        return $this->render('GTaxiTaxiDriverBundle:Taxi:index.html.twig', array(
                // ...
            ));    }

}
