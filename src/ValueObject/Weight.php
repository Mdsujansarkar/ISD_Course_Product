<?php 
declare(strict_types=1);

namespace App\ValueObject;

class Weight 
{
    private string $unit;
    private string $amount;

    public function __construct(string $amount, string $unit='kg')
    {
        $this->unit = $unit;
        $this->amount = $amount;
    }

    public function getAmount(): string {

        return $this->amount;
    }

    public function getUnit(): string {
        return $this->unit;
    }
    
}
