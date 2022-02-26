<?php 

declare(strict_types=1);

namespace App\Tests;
use App\Unit;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

class UnitTest extends TestCase
{
    public function testgetVolume(): void
    {
        $getVolumData = new Unit();
        $inputData= $getVolumData ->getVolume(50.50, 50.50);
        $outPut = 2550.25;
        $this->assertSame($outPut,$inputData);
    }
}