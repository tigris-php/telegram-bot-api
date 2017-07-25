<?php
/**
 * @author Sergey Vasilev <doozookn@gmail.com>
 */

use Tigris\Telegram\Types\Inline\InlineQueryResult;
use Tigris\Telegram\Types\Inline\InlineQueryResult\InlineQueryResultGame;

class InlineQueryResultGameTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = InlineQueryResultGame::parse([]);
        $this->assertInstanceOf(\Tigris\Telegram\Types\Inline\InlineQueryResult\InlineQueryResultGame::class, $a);
        $this->assertInstanceOf(InlineQueryResult::class, $a);

        $this->assertSame('game', $a::TYPE);
    }
}