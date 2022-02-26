<?php
declare(strict_types=1);
require_once __DIR__ . '/vendor/autoload.php';
use App\Product;
use App\Unit;

$ob = new Product();
$obUnit = new Unit();
echo $ob->getPrice($obUnit);