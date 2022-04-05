<?php 
declare(strict_types=1);

namespace App\Tests\Math;

use App\Math\Util;
use App\ValueObject\Size;
use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase 
{
    /** 
    * @dataProvider utilVolumeDataProvider
    */
    public function testUtilVolume($size, $expected):void {
        $data = new Util();
        // $size= new Size('2','2','2');
       $output= $data->calculateVolume($size->getLangth(),$size->getHeight(),$size->getWidth());
        $this->assertSame($expected,$output);
    }
    public function utilVolumeDataProvider(): array {
        return [2,8];
    }
}