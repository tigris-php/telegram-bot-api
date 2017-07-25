<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a link to an animated GIF file.
 * By default, this animated GIF file will be sent by the user with optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the animation.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultgif
 *
 * @property string $gif_url
 * @property int $gif_width
 * @property int $gif_height
 * @property int $gif_duration
 * @property string $thumb_url
 * @property string $title
 * @property string $caption
 */
class InlineQueryResultGif extends InlineQueryResult
{
    const TYPE = 'gif';
}