<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InputMessageContent;

use Tigris\Telegram\Types\Inline\InputMessageContent;

/**
 * Represents the content of a text message to be sent as the result of an inline query.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inputtextmessagecontent
 *
 * @property string $message_text
 * @property string $parse_mode
 * @property bool $disable_web_page_preview
 */
class InputTextMessageContent extends InputMessageContent
{

}