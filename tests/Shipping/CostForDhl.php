<?php 
declare(strict_types=1);
namespace App\Tests\Shipping;
use App\Shipping\CostCalculator\CostCalculator;

class CostForDhl extends CostCalculator
{
    public function dhlMethod() {
        return "dhl";
    }
}