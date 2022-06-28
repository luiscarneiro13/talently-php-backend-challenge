<?php

namespace App\Productos;

use App\Productos\ProductosInterface;

class Tumi implements ProductosInterface
{
    public function calcular($quality, $sellIn)
    {
        return [
            "quality" => $quality,
            "sellIn" => $sellIn
        ];
    }
}
