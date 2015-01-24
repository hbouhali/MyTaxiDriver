<?php

namespace GTaxi\TaxiDriverBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class YourTaxiControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/index');
    }

    public function testAgence()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Agence');
    }

    public function testDriver()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Driver');
    }

    public function testClient()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Client');
    }

    public function testAdministrator()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Administrator');
    }

}
