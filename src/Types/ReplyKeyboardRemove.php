<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\Interfaces\ReplyMarkupInterface;

/**
 * Class ReplyKeyboardRemove
 *
 * @package Tigris\Telegram\Types
 * @link https://core.telegram.org/bots/api#replykeyboardremove
 *
 * @property bool $remove_keyboard
 * @property bool $selective
 */
class ReplyKeyboardRemove extends BaseObject implements ReplyMarkupInterface
{
    /**
     * Constructor
     *
     * @param bool $selective
     * @return static
     */
    public static function create($selective = false)
    {
        $data = compact('selective');
        $data['remove_keyboard'] = true;
        return static::build($data);
    }
}