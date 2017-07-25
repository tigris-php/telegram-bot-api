<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Games;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\PhotoSize;
use Tigris\Telegram\Types\Scalar\ScalarInteger;
use Tigris\Telegram\Types\Scalar\ScalarString;

/**
 * Class Animation
 * You can provide an animation for your game so that it looks stylish in chats (check out Lumberjack for an example).
 * This object represents an animation file to be displayed in the message containing a game.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#animation
 *
 * @property string $file_id
 * @property PhotoSize[] $thumb
 * @property string $file_name
 * @property string $mime_type
 * @property string $file_size
 */
class Animation extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'file_id' => ScalarString::class,
            'thumb' => [PhotoSize::class],
            'file_name' => ScalarString::class,
            'mime_type' => ScalarString::class,
            'file_size' => ScalarInteger::class,
        ];
    }
}