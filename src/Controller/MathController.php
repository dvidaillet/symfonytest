<?php

namespace App\Controller;

use App\Service\MathService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MathController extends AbstractController
{
    private $mathService;

    public function __construct(MathService $mathService)
    {
        $this->mathService = $mathService;
    }

    #[Route('/add/{a}/{b}', name: 'add_numbers', methods: "GET")]
    public function add($a, $b): JsonResponse
    {
        $result = $this->mathService->add((int)$a, (int)$b);
        return new JsonResponse(['result' => $result]);
    }
}
