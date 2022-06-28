<?php

namespace App\Productos;

use App\Productos\ProductosInterface;

class Cafe implements ProductosInterface
{
    public $maximo;
    public $minimo;
    public $factor;

    public function __construct()
    {
        $this->maximo = 50;
        $this->minimo = 0;
        $this->factor = 2;
    }

    public function calcular($quality, $sellIn)
    {

        if ($sellIn > 0) {
            $quality -= $this->factor;
        } 
        else {
            $quality -= $this->factor * 2;
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
