<?php

namespace App\Productos;

use App\Productos\ProductosInterface;

class Normales implements ProductosInterface
{
    public $maximo;
    public $minimo;

    public function __construct()
    {
        $this->maximo = 50;
        $this->minimo = 0;
    }

    public function calcular($quality, $sellIn)
    {

        if ($sellIn > 0) {
            $quality--;
        } else {
            $quality -= 2;
        }

        $sellIn--;

        if ($quality > $this->maximo) $quality = $this->maximo;

        if ($quality < $this->minimo) $quality = $this->minimo;

        return [
            "quality" => $quality,
            "sellIn" => $sellIn
        ];
    }
}
