<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */
use Tigris\Telegram\Types\Scalar\ScalarString;

class ScalarStringTest extends \PHPUnit\Framework\TestCase
{
    public function testReadData()
    {
        $this->assertInternalType('string', ScalarString::readData(123));
        $this->assertSame(ScalarString::readData('test'), 'test');
    }
}
