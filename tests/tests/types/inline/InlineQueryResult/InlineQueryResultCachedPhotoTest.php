<?php
/**
 * @author Sergey Vasilev <doozookn@gmail.com>
 */

use Tigris\Telegram\Types\Inline\InlineQueryResult;
use Tigris\Telegram\Types\Inline\InlineQueryResult\InlineQueryResultCachedPhoto;

class InlineQueryResultCachedPhotoTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = InlineQueryResultCachedPhoto::parse([]);
        $this->assertInstanceOf(\Tigris\Telegram\Types\Inline\InlineQueryResult\InlineQueryResultCachedPhoto::class, $a);
        $this->assertInstanceOf(InlineQueryResult::class, $a);

        $this->assertSame('photo', $a::TYPE);
    }
}