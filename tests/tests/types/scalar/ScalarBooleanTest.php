<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */
use Tigris\Telegram\Types\Scalar\ScalarBoolean;

class ScalarBooleanTest extends \PHPUnit\Framework\TestCase
{
    public function testReadData()
    {
        $this->assertInternalType('boolean', ScalarBoolean::readData(123));
        $this->assertSame(ScalarBoolean::readData(0), false);
        $this->assertSame(ScalarBoolean::readData(1), true);
    }
}
