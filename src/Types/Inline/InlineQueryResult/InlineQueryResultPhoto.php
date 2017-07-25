<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a link to a photo. By default, this photo will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the photo.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultphoto
 *
 * @property string $photo_url
 * @property string $thumb_url
 * @property string $photo_width
 * @property string $photo_height
 * @property string $title
 * @property string $description
 * @property string $caption
 */
class InlineQueryResultPhoto extends InlineQueryResult
{
    const TYPE = 'photo';
}