<?php 
declare(strict_types=1);

namespace App\ValueObject;

class Size 
{
    private string $langth;
    private string $height;
    private string $width;
    private string $unit;

    public function __construct(string $langth, string $height, string $width, string $unit='cm')
    {
        $this->langth = $langth;
        $this->height = $height;
        $this->width  = $width;
    }
    public function getLangth(): string {
        return $this->langth;
    }
    public function getHeight(): string {
        return $this->height;
    }
    public function getWidth(): string {
        return $this->width;
    }
    public function getUnit(): string {
        return $this->unit;
    }
}
