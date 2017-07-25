<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */
namespace Tigris\Telegram\Types;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Scalar\ScalarInteger;
use Tigris\Telegram\Types\Scalar\ScalarString;

/**
 * Class PhotoSize
 * This object represents one size of a photo or a file / sticker thumbnail.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#photosize
 *
 * @property string $file_id
 * @property int $width.
 * @property int $height
 * @property int $file_size
 */
class PhotoSize extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'file_id' => ScalarString::class,
            'width' => ScalarInteger::class,
            'height' => ScalarInteger::class,
            'file_size' => ScalarInteger::class,
        ];
    }
}