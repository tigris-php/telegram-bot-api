<?php
/**
 * @author Sergey Vasilev <doozookn@gmail.com>
 */
use Tigris\Telegram\Exceptions\TypeException;
use Tigris\Telegram\Types\Games\Game;

class GameTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = Game::parse([
            'title' => 'foo',
            'description' => 'bar',
            'photo' => [
                [
                    'file_id' => '123',
                    'width' => 100,
                    'height' => 100,
                    'file_size' => 100
                ]
            ],
        ]);

        $this->assertInstanceOf(Game::class, $a);
        $this->assertAttributeSame('foo', 'title', $a);
        $this->assertAttributeSame('bar', 'description', $a);
        $this->assertAttributeInternalType('array', 'photo', $a);

        $b = Game::parse($a);
        $this->assertSame($b, $a);

        $z = Game::parse(null);
        $this->assertNull($z);

        try {
            Game::parse(123);
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }

        try {
            Game::parse([]);
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }
    }


}