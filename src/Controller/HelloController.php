<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HelloController extends AbstractController
{
    #[Route('/hello/{name}', name: 'app_hello')]
    public function customHello(string $name = 'World'): Response
     {
        return $this->render('hello/index.html.twig', [
        'controller_name' => $name,
      ]);
     }
}
