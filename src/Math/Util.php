<?php

declare(strict_types=1);

namespace App\Math;

use App\ValueObject\Size;

class Util
{
    public function calculateVolume(Size $size): string
    {
        return bcmul(
            bcmul(
                $size->getLangth(),
                $size->getHeight(),
            ),
            $size->getWidth()
        );
    }
}