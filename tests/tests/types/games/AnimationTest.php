<?php
/**
 * @author Sergey Vasilev <doozookn@gmail.com>
 */

use Tigris\Telegram\Exceptions\TypeException;
use Tigris\Telegram\Types\Games\Animation;

class AnimationTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = Animation::parse([
            'file_id' => '1147',
        ]);

        $this->assertInstanceOf(Animation::class, $a);
        $this->assertAttributeSame('1147', 'file_id', $a);


        $b = Animation::parse($a);
        $this->assertSame($a, $b);

        $z = Animation::parse(null);
        $this->assertNull($z);

        try {
            Animation::parse(1147);
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);

        }

        try {
            Animation::parse([]);
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }
    }
}