<?php

declare(strict_types=1);

namespace App;
use App\ShippingCalculator;
use App\Dimension;

class DhlCalculator implements ShippingCalculator
{
    public function findCost(Dimension $dimension) {
        return $this->$dimension()->getWeight() * 3 + 100; 
    }

}
// ShippingCalculator