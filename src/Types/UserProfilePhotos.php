<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Scalar\ScalarInteger;

/**
 * This object represent a user's profile pictures.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * @property int $total_count
 * @property PhotoSize[][] $photos
 */
class UserProfilePhotos extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'total_count' => ScalarInteger::class,
            'photos' => [PhotoSize::class, 2],
        ];
    }
}