<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a link to a file stored on the Telegram servers.
 * By default, this file will be sent by the user with an optional caption.
 * Alternatively, you can use input_message_content to send a message with the specified content instead of the file.
 * Currently, only pdf-files and zip archives can be sent using this method.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultcacheddocument
 *
 * @property string $title
 * @property string $document_file_id
 * @property string $description
 * @property string $caption
 */
class InlineQueryResultCachedDocument extends InlineQueryResult
{
    const TYPE = 'document';
}