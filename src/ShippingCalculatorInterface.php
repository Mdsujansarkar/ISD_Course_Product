<?php

declare(strict_types=1);
namespace App;


interface ShippingCalculator
{
    public function calculator(string $method, Product $product): float;
}