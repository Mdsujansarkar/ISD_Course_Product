<?php 
declare(strict_types=1);

namespace App\ValueObject;

class Weight 
{
    private string $unit;
    private string $amount;

    public function __construct($unit, $amount)
    {
        $this->unit = $unit;
        $this->amount = $amount;
    }
    
}
