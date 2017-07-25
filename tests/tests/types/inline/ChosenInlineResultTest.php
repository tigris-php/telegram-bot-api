<?php

/**
 * @author Sergey Vasilev <doozookn@gmail.com>
 */
use Tigris\Telegram\Exceptions\TypeException;
use Tigris\Telegram\Types\Inline\ChosenInlineResult;
use Tigris\Telegram\Types\Location;
use Tigris\Telegram\Types\User;

class ChosenInlineResultTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = ChosenInlineResult::parse([
            'result_id' => '121',
            'from' => [
                'id' => '711',
                'first_name' => 'Tigris',
                'last_name' => 'Bot',
                'username' => '@tigrisbot',
            ],
            'location' => [
                'longitude' => 0.5,
                'latitude' => 0.5,
            ],
            'inline_message_id' => '12',
            'query' => 'foo',
        ]);

        $this->assertInstanceOf(ChosenInlineResult::class, $a);
        $this->assertAttributeSame('121', 'result_id', $a);
        $this->assertAttributeInstanceOf(User::class, 'from', $a);
        $this->assertAttributeInstanceOf(Location::class, 'location', $a);
        $this->assertAttributeSame('foo', 'query', $a);

        $b = ChosenInlineResult::parse($a);
        $this->assertSame($a, $b);

        $z = ChosenInlineResult::parse(null);
        $this->assertNull($z);

        try {
            ChosenInlineResult::parse('scalar');
            $this->fail('Expected exception not thrown');
        }  catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }

        try {
            ChosenInlineResult::parse([]);
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }
    }
}