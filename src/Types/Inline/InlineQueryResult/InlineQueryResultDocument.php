<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a link to a file. By default, this file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 * Currently, only .PDF and .ZIP files can be sent using this method.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultdocument
 *
 * @property string $title
 * @property string $caption
 * @property string $document_url
 * @property string $mime_type
 * @property string $description
 * @property string $thumb_url
 * @property int $thumb_width
 * @property int $thumb_height
 */
class InlineQueryResultDocument extends InlineQueryResult
{
    const TYPE = 'document';
}