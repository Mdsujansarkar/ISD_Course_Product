<?php 
declare(strict_types=1);

namespace App\Tests\Shipping;
use PHPUnit\Framework\TestCase;
use App\Math\Util;
use App\Entity\Product;
use App\Shipping\CostCalculator\CostCalculator;

class CostCalculatorTest extends TestCase
{
    public function testShippingCostCalculate($product, $size, $weight, $amount, $exception):void {

        $costCalculate = new CostCalculator(new Util());
        $costCalculate ->calculate($product->getSize()->getWeight()->getAmount(),$product->getSize());
    }
}