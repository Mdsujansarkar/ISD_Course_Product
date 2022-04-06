<?php 
declare(strict_types=1);
namespace App\Tests\Shipping;
use App\Shipping\CostCalculator\CostCalculator;

class CostForPatho extends CostCalculator
{
    public function pathoMethod() {
        return "pathao";
    }
}