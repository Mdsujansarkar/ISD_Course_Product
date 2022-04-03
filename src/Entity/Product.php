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

    public function getSize(): Size {
        return $this->size;
    }

    public function setSize(Size $size): self {
        $this->size =$size;
        return $this;
    }

    public function getWeight(): Weight {
        return $this->weigh;
    }

    public function setWeight(Weight $weight): self {
         $this->weigh = $weight;
         return $this;
    }
}