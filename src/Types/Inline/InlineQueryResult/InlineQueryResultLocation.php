<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a location on a map. By default, the location will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the location.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultlocation
 *
 * @property float $latitude
 * @property float $longitude
 * @property string $title
 * @property string $thumb_url
 * @property int $thumb_width
 * @property int $thumb_height
 */
class InlineQueryResultLocation extends InlineQueryResult
{
    const TYPE = 'location';
}