<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Media.php';

class MediaTest extends TestCase
{
    public function testCalcularMediaSimples()
    {
        $media = new Media();
        $resultado = $media->calcularMedia([10, 8, 6]);
        $this->assertEquals(8, $resultado); // Esperado: 8
    }

    public function testCalcularMediaComZero()
    {
        $media = new Media();
        $resultado = $media->calcularMedia([0, 0, 0]);
        $this->assertEquals(0, $resultado); // Esperado: 0
    }
}
    