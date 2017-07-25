<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Stickers;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\PhotoSize;
use Tigris\Telegram\Types\Scalar\ScalarInteger;
use Tigris\Telegram\Types\Scalar\ScalarString;

/**
 * Class Sticker
 * This object represents a sticker.
 *
 * @package Tigris\Telegram\Types
 * @link https://core.telegram.org/bots/api#sticker
 *
 * @property string $file_id
 * @property int $width
 * @property int $height
 * @property PhotoSize $thumb
 * @property string $emoji
 * @property string $set_name
 * @property MaskPosition $mask_position
 * @property int $file_size
 */
class Sticker extends BaseObject
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
            'thumb' => PhotoSize::class,
            'emoji' => ScalarString::class,
            'set_name' => ScalarString::class,
            'mask_position' => MaskPosition::class,
            'file_size' => ScalarInteger::class,
        ];
    }
}