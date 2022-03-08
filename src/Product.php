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
  
    public function getPrice(DhlCalculator $dhlCalculator, PathoCalculator $pathoCalculator)
    {
        if(self::PATHO === 'patho') {
          
            return $dhlCalculator->findCost($this->dimension);
        }
        if(self::DHL === 'dhl') {
            
            return $pathoCalculator->findCost($this->dimension);
        }
        
    }
}



