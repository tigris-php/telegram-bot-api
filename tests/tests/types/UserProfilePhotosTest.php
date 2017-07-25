<?php


use Tigris\Telegram\Types\UserProfilePhotos;

class UserProfilePhotosTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = UserProfilePhotos::parse([
            'total_count' => 12,
            'photos' => [
                [
                    [
                        'file_id' => 'foobar',
                        'width' => 640,
                        'height' => 480,
                        'file_size' => 1024,
                    ],
                    [
                        'file_id' => 'foobar',
                        'width' => 640,
                        'height' => 480,
                        'file_size' => 1024,
                    ],
                ]
            ],
        ]);

        $this->assertInstanceOf(UserProfilePhotos::class, $a);
        $this->assertAttributeInternalType('array', 'photos', $a);
    }
}