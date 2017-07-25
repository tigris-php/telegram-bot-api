<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InputMessageContent;

use Tigris\Telegram\Types\Inline\InputMessageContent;

/**
 * Represents the content of a contact message to be sent as the result of an inline query.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inputcontactmessagecontent
 *
 * @property string $phone_number
 * @property string $first_name
 * @property string $last_name
 */
class InputContactMessageContent extends InputMessageContent
{

}