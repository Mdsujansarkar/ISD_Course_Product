<?php
declare(strict_types=1);
namespace App;
use App\Unit;

class Product 
{
    const PATHO = 'patho';
    const DHL = 'dhl';
    public function getPrice(Unit $unit)
    {
        if(self::PATHO === 'patho') {
            return ($unit->getWeight(2.5)*2) + ($unit->getVolume(2.3, 3.6)*3);
        }
        if(self::DHL === 'dhl') {
            return ($unit->getWeight(2.5)*3) +100;
        }
        
    }
}



