<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Location;
use Tigris\Telegram\Types\Scalar\ScalarString;
use Tigris\Telegram\Types\User;

/**
 * Class InlineQuery
 * This object represents an incoming inline query. When the user sends an empty query,
 * your bot could return some default or trending results.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#inlinequery
 *
 * @property string $id
 * @property User $from
 * @property Location $location
 * @property string $query
 * @property string $offset
 */
class InlineQuery extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'id' => ScalarString::class,
            'from' => User::class,
            'location' => Location::class,
            'query' => ScalarString::class,
            'offset' => ScalarString::class,
        ];
    }
}