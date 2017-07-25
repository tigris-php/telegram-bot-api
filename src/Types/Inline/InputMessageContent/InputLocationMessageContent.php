<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InputMessageContent;

use Tigris\Telegram\Types\Inline\InputMessageContent;

/**
 * Represents the content of a location message to be sent as the result of an inline query.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inputlocationmessagecontent
 *
 * @property float $latitude
 * @property float $longitude
 */
class InputLocationMessageContent extends InputMessageContent
{

}