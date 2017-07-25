<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Games;

use Tigris\Telegram\Types\Base\BaseObject;
use Tigris\Telegram\Types\MessageEntity;
use Tigris\Telegram\Types\PhotoSize;
use Tigris\Telegram\Types\Scalar\ScalarString;

/**
 * Class Game
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique
 * identifiers.
 *
 * @package Tigris\Types
 * @link https://core.telegram.org/bots/api#game
 *
 * @property string $title
 * @property string $description
 * @property PhotoSize[] $photo
 * @property string $text
 * @property MessageEntity[] $text_entities
 * @property Animation $animation
 */
class Game extends BaseObject
{
    /**
     * @inheritdoc
     */
    public static function fields()
    {
        return [
            'title' => ScalarString::class,
            'description' => ScalarString::class,
            'photo' => [PhotoSize::class],
            'text' => ScalarString::class,
            'text_entities' => [MessageEntity::class],
            'animation' => Animation::class,
        ];
    }
}