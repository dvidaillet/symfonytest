<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HelloControllerTest extends WebTestCase
{
    public function testCustomHello(): void
    {
        $client = static::createClient();

        // Hacer una solicitud GET a la ruta /hello/John
        $client->request('GET', '/hello/John');

        // Verificar que la respuesta es exitosa (código 200)
        $this->assertResponseIsSuccessful();

        // Verificar que la respuesta contiene el texto esperado
        $this->assertStringContainsString('Hello John!', $client->getResponse()->getContent());
    }

    public function testCustomHelloDefault(): void
    {
        $client = static::createClient();

        // Hacer una solicitud GET a la ruta /hello sin proporcionar un nombre
        $client->request('GET', '/hello');

        // Verificar que la respuesta es exitosa (código 200)
        $this->assertResponseIsSuccessful();

        // Verificar que la respuesta contiene el saludo predeterminado
        $this->assertStringContainsString('Hello World!', $client->getResponse()->getContent());
    }
}
