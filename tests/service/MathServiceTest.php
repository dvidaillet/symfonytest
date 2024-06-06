<?php

namespace App\Tests\Service;

use App\Service\MathService;
use PHPUnit\Framework\TestCase;

class MathServiceTest extends TestCase
{
    public function testAdd()
    {
        $mathService = new MathService();
        $result = $mathService->add(5, 3);
        $this->assertEquals(8, $result);
    }
}
