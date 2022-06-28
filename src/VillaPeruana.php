<?php

namespace App;

use App\VillaPeruanaInterface;
use App\Productos\Normales;
use App\Productos\PiscoPeruano;
use App\Productos\Tumi;
use App\Productos\TicketVip;
use App\Productos\Cafe;

class VillaPeruana implements VillaPeruanaInterface
{
    public $name;
    public $quality;
    public $sellIn;

    const STRATEGY = [
        'normal' => Normales::class,
        'Pisco Peruano' => PiscoPeruano::class,
        'Tumi de Oro Moche' => Tumi::class,
        'Ticket VIP al concierto de Pick Floid' => TicketVip::class,
        'Café Altocusco' => Cafe::class,
    ];

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn)
    {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        $strategyClass = SELF::STRATEGY[$this->name];
        $datos = (new $strategyClass)->calcular($this->quality, $this->sellIn);
        $this->quality = $datos['quality'];
        $this->sellIn = $datos['sellIn'];
    }
}
