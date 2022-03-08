<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';

use App\Dimension;
use App\DhlCalculator;
use App\PathoCalculator;
use App\Product;

$ob = new Dimension(10,20,10,10);
$dhCal = new DhlCalculator();
$pathoCal = new PathoCalculator();
$dhCal->findCost($ob);
$pathoCal->findCost($ob);
$product = new Product();
echo $product->getPrice($dhCal, $pathoCal);
