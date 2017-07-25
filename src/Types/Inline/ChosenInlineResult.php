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
 * Class ChosenInlineResult
 * Represents a result of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#choseninlineresult
 *
 * @property string $result_id
 * @property User $from
 * @property Location $location
 * @property string $inline_message_id
 * @property string $query
 */
class ChosenInlineResult extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'result_id' => ScalarString::class,
            'from' => User::class,
            'location' => Location::class,
            'inline_message_id' => ScalarString::class,
            'query' => ScalarString::class,
        ];
    }
}