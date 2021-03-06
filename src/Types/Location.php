<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */
namespace Tigris\Telegram\Types;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Scalar\ScalarFloat;

/**
 * Class Location
 * This object represents a point on the map.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#location
 *
 * @property float $longitude
 * @property float $latitude
 */
class Location extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'longitude' => ScalarFloat::class,
            'latitude' => ScalarFloat::class,
        ];
    }
}