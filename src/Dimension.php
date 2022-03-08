<?php
declare(strict_types=1);


namespace App;

class Dimension
{
    private $height;
    private $length;
    private $width;
    private $weight;
    public function __construct($height, $length, $width, $weight)
    {
        $this->height = $height;
        $this->length  = $length;
        $this->width  = $width;
        $this->weights  = $weight;
    }
    public function getVolume()
    {
        return $this->height * $this->length * $this->weight;;
      
    }
    public function getWeight()
    {
        return $this->width;
    }
}

