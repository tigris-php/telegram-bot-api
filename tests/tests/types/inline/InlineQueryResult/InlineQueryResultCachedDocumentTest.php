<?php
/**
 * @author Sergey Vasilev <doozookn@gmail.com>
 */

use Tigris\Telegram\Types\Inline\InlineQueryResult;
use Tigris\Telegram\Types\Inline\InlineQueryResult\InlineQueryResultCachedDocument;

class InlineQueryResultCachedDocumentTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = InlineQueryResultCachedDocument::parse([]);
        $this->assertInstanceOf(\Tigris\Telegram\Types\Inline\InlineQueryResult\InlineQueryResultCachedDocument::class, $a);
        $this->assertInstanceOf(InlineQueryResult::class, $a);

        $this->assertSame('document', $a::TYPE);
    }
}