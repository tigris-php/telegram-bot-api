<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a venue. By default, the venue will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the venue.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultvenue
 *
 * @property float $latitude
 * @property float $longitude
 * @property string $title
 * @property string $address
 * @property string $foursquare_id
 * @property int $thumb_url
 * @property int $thumb_width
 * @property int $thumb_height
 */
class InlineQueryResultVenue extends InlineQueryResult
{
    const TYPE = 'venue';
}