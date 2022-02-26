<?php
declare(strict_types=1);
namespace App;
use App\Unit;

class Product 
{
    const PATHO = 'patho';
    const DHL = 'dhl';
    private $height;
    private $length;
    public function __construct($height, $length)
    {
        $this->height = $height;
        $this->length = $length;
    }
    public function getPrice(Unit $unit)
    {
        if(self::PATHO === 'patho') {
            return ($unit->getWeight(2.5)*2) + ($unit->getVolume($this->height, $this->length)*3);
        }
        if(self::DHL === 'dhl') {
            return ($unit->getWeight(2.5)*3) +100;
        }
        
    }
}



