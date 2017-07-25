<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Interfaces\ReplyMarkupInterface;

/**
 * Class ReplyKeyboardMarkup
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#replykeyboardmarkup
 *
 * @property KeyboardButton[][] $keyboard
 * @property bool $resize_keyboard
 * @property bool $one_time_keyboard
 * @property bool $selective
 */
class ReplyKeyboardMarkup extends BaseObject implements ReplyMarkupInterface
{
    /**
     * Constructor
     *
     * @param KeyboardButton[][] $keyboard
     * @param bool $resize_keyboard
     * @param bool $one_time_keyboard
     * @param bool $selective
     * @return static
     */
    public static function create(
        $keyboard,
        $resize_keyboard = false,
        $one_time_keyboard = false,
        $selective = false
    ) {
        return static::build(compact(
            'keyboard',
            'resize_keyboard',
            'one_time_keyboard',
            'selective'
        ));
    }
}