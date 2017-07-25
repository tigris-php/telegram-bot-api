<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a contact with a phone number. By default, this contact will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the contact.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultcontact
 *
 * @property string $phone_number
 * @property string $first_name
 * @property string $last_name
 * @property string $thumb_url
 * @property string $thumb_width
 * @property string $thumb_height
 */
class InlineQueryResultContact extends InlineQueryResult
{
    const TYPE = 'contact';
}