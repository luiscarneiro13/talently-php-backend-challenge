<?php

namespace App;

interface VillaPeruanaInterface
{
    public static function of($name, $quality, $sellIn);
    public function tick();
}
