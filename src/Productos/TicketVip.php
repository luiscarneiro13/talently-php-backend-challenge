<?php

namespace App\Productos;

use App\Productos\ProductosInterface;

class TicketVip implements ProductosInterface
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

        if ($sellIn > 10) {
            $quality++;
        } else if ($sellIn > 5 && $sellIn <= 10) {
            $quality += 2;
        } else if ($sellIn > 0 && $sellIn <= 5) {
            $quality += 3;
        } else {
            $quality = 0;
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
