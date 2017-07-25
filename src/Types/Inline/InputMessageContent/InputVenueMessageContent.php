<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InputMessageContent;

use Tigris\Telegram\Types\Inline\InputMessageContent;

/**
 * Represents the content of a venue message to be sent as the result of an inline query.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inputvenuemessagecontent
 *
 * @property float $latitude
 * @property float $longitude
 * @property string $title
 * @property string $address
 * @property string $foursquare_id
 */
class InputVenueMessageContent extends InputMessageContent
{

}