<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Scalar\ScalarInteger;
use Tigris\Telegram\Types\Scalar\ScalarString;

/**
 * Class Audio
 * This object represents an audio file to be treated as music by the Telegram clients.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#audio
 *
 * @property string $file_id
 * @property int $duration
 * @property string $performer
 * @property string $title
 * @property string $mime_type
 * @property int $file_size
 */
class Audio extends BaseObject
{
    public static function fields()
    {
        return [
            'file_id' => ScalarString::class,
            'duration' => ScalarInteger::class,
            'performer' => ScalarString::class,
            'title' => ScalarString::class,
            'mime_type' => ScalarString::class,
            'file_size' => ScalarInteger::class,
        ];
    }
}