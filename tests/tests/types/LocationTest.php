<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */
use Tigris\Telegram\Exceptions\TypeException;
use Tigris\Telegram\Types\Location;

class LocationTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = Location::parse([
            'longitude' => 0.5,
            'latitude' => 0.5,
        ]);

        $this->assertInstanceOf(Location::class, $a);
        $this->assertAttributeSame(0.5, 'longitude', $a);
        $this->assertAttributeSame(0.5, 'latitude', $a);

        $b = Location::parse($a);
        $this->assertSame($a, $b);

        $z = Location::parse(null);
        $this->assertNull($z);

        try {
            Location::parse(123);
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }

        try {
            Location::parse([]);
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }
    }
}
