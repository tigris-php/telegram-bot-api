<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */
namespace Tigris\Telegram\Types;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Scalar\ScalarInteger;
use Tigris\Telegram\Types\Scalar\ScalarString;

/**
 * Class Document
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#document
 *
 * @property string $file_id
 * @property PhotoSize $thumb
 * @property string $file_name
 * @property string $mime_type
 * @property int $file_size
 */
class Document extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'file_id' => ScalarString::class,
            'thumb' => PhotoSize::class,
            'file_name' => ScalarString::class,
            'mime_type' => ScalarString::class,
            'file_size' => ScalarInteger::class,
        ];
    }
}