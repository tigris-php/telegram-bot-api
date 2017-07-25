<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a link to an animated GIF file stored on the Telegram servers.
 * By default, this animated GIF file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with specified content instead of the animation.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultcachedgif
 *
 * @property string $gif_file_id
 * @property string $title
 * @property string $caption
 */
class InlineQueryResultCachedGif extends InlineQueryResult
{
    const TYPE = 'gif';
}