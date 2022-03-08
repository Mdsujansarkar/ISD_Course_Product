<?php

declare(strict_types=1);
namespace App;
use App\ShippingCalculator;
use App\Dimension;

class PathoCalculator implements ShippingCalculator
{
    public function findCost(Dimension $dimension)
    {
        return $this->$dimension()->getWeight() * 2 + $this->$dimension->getVolume(); 
    }
}