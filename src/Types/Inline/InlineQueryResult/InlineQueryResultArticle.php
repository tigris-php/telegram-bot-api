<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Inline\InlineQueryResult;

use Tigris\Telegram\Types\Inline\InlineQueryResult;

/**
 * Represents a link to an article or web page.
 *
 * @package Tigris\Types\Inline
 * @link https://core.telegram.org/bots/api#inlinequeryresultarticle
 *
 * @property string $title
 * @property string $url
 * @property bool $hide_url
 * @property string $description
 * @property string $thumb_url
 * @property string $thumb_width
 * @property string $thumb_height
 */
class InlineQueryResultArticle extends InlineQueryResult
{
    const TYPE = 'article';
}