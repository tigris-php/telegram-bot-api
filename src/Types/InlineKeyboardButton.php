<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */
namespace Tigris\Telegram\Types;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Games\CallbackGame;

/**
 * This object represents one button of an inline keyboard.
 * You must use exactly one of the optional fields.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#inlinekeyboardbutton
 *
 * @property string $text
 * @property string $url
 * @property string $callback_data
 * @property string $switch_inline_query
 * @property string $switch_inline_query_current_chat
 * @property CallbackGame $callback_game
 * @property bool $pay
 */
class InlineKeyboardButton extends BaseObject
{
    /**
     * @param $text
     * @param string $url
     * @param string $callback_data
     * @param string $switch_inline_query
     * @param string $switch_inline_query_current_chat
     * @param CallbackGame $callback_game
     * @param bool $pay
     * @return BaseObject|static
     */
    public static function create(
        $text,
        $url = null,
        $callback_data = null,
        $switch_inline_query = null,
        $switch_inline_query_current_chat = null,
        CallbackGame $callback_game = null,
        $pay = null
    ){
        // checking arguments
        $check = [
            $url,
            $callback_data,
            $switch_inline_query,
            $switch_inline_query_current_chat,
            $callback_game,
            $pay
        ];
        $check = array_filter($check);
        if (count($check) > 1) {
            throw new \InvalidArgumentException('Please select exactly one of the optional fields');
        }
        // creating instance
        return static::build(compact(
            'text',
            'url',
            'callback_data',
            'switch_inline_query',
            'switch_inline_query_current_chat',
            'callback_game',
            'pay'
        ));
    }
}