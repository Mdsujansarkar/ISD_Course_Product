<?php
declare(strict_types=1);
namespace App;
require_once __DIR__ . '/vendor/autoload.php';

use App\Entity\Product;
use App\ValueObject\Size;
use App\ValueObject\Weight;





class Customer
{
    public function deliveryCharge()
    {
        $data = new Product(
            new Size('10','5','5'),
            new Weight('4')
        );
        // $data->getWeight(5);
        // $data->getVolume(20);
        

    }
}

$data = new Customer();
echo $data->deliveryCharge();