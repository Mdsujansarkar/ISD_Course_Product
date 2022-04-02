<?php
declare(strict_types=1);

namespace App\Entity;
use App\ValueObject\Weight;
use App\ValueObject\Size;

class Product
{
    private ?int $id;
    private Size $size;
    private Weight $weight;

    public function __construct($size, $weight)
    {
       $this->size = $size;
       $this->weight = $weight; 
    }
}