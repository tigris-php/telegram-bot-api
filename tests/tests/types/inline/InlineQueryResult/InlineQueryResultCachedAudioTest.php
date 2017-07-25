<?php
/**
 * @author Sergey Vasilev <doozookn@gmail.com>
 */

use Tigris\Telegram\Types\Inline\InlineQueryResult;
use Tigris\Telegram\Types\Inline\InlineQueryResult\InlineQueryResultCachedAudio;

class InlineQueryResultCachedAudioTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = InlineQueryResultCachedAudio::parse([]);
        $this->assertInstanceOf(\Tigris\Telegram\Types\Inline\InlineQueryResult\InlineQueryResultCachedAudio::class, $a);
        $this->assertInstanceOf(InlineQueryResult::class, $a);

        $this->assertSame('audio', $a::TYPE);
    }
}