<?php

namespace GTaxi\TaxiDriverBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class YourTaxiController extends Controller
{
    public function indexAction()
    {
        return $this->render('GTaxiTaxiDriverBundle:YourTaxi:index.html.twig', array(
                // ...
            ));    }

    public function AgenceAction()
    {
        return $this->render('GTaxiTaxiDriverBundle:YourTaxi:Agence.html.twig', array(
                // ...
            ));    }

    public function DriverAction()
    {
        return $this->render('GTaxiTaxiDriverBundle:YourTaxi:Driver.html.twig', array(
                // ...
            ));    }

    public function ClientAction()
    {
        return $this->render('GTaxiTaxiDriverBundle:YourTaxi:Client.html.twig', array(
                // ...
            ));    }

    public function AdministratorAction()
    {
        return $this->render('GTaxiTaxiDriverBundle:YourTaxi:Administrator.html.twig', array(
                // ...
            ));    }

}
