<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a link to a voice message stored on the Telegram servers.
 * By default, this voice message will be sent by the user.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the voice message.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultcachedvoice
 *
 * @property string $voice_file_id
 * @property string $title
 * @property string $caption
 */
class InlineQueryResultCachedVoice extends InlineQueryResult
{
    const TYPE = 'voice';
}