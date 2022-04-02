<?php 
declare(strict_types=1);

namespace App\ValueObject;

class Size 
{
    private string $langth;
    private string $height;
    private string $width;

    public function __construct($langth, $height, $width)
    {
        $this->langth = $langth;
        $this->height = $height;
        $this->width  = $width;
    }
}
