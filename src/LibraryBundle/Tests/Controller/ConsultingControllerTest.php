<?php

namespace LibraryBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConsultingControllerTest extends WebTestCase
{
    public function testBooks()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/books');
    }

    public function testCat()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/categories/value/books');
    }

    public function testBook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/books/id');
    }

}
