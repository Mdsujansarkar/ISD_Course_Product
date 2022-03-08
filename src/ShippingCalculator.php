<?php
declare(strict_types=1);

namespace App;

interface ShippingCalculator
{
    public function findCost(Dimension $dimension);
}

