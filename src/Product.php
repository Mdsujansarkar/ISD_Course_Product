<?php
declare(strict_types=1);

namespace App;
use App\DhlCalculator;
use App\PathoCalculator;
use App\Dimension;

class Product 
{
    const PATHO = 'patho';
    const DHL = 'dhl';
  
    public function getPrice($test, DhlCalculator $dhlCalculator, PathoCalculator $pathoCalculator)
    {
        if(self::PATHO === $test) {
          
            return $dhlCalculator->findCost($this->dimension);
        }
        if(self::DHL === $test) {
            
            return $pathoCalculator->findCost($this->dimension);
        }
        
    }
}



