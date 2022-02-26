<?php
declare(strict_types=1);

namespace App;
class Unit {

    private float $weight;
    
    public function getVolume(float $height, float $width): float
    {
        return (float) $height * $width;
    }

    public function getWeight(float $weight): float
    {
        return (float)$this->weight = $weight;
    }

}

