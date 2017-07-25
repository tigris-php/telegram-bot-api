<?php
/**
 * @author Alexey Samoylov <alexey.samoylov@gmail.com>
 */

namespace Tigris\Telegram\Types\Base;

use Tigris\Telegram\Helpers\TypeHelper;
use Tigris\Telegram\Types\Interfaces\TypeInterface;

abstract class BaseScalar implements TypeInterface
{
    /**
     * @inheritdoc
     * @return mixed
     */
    public static function parse($data)
    {
        return TypeHelper::parse(static::class, $data);
    }

    public static function readData($data)
    {
        return $data;
    }
}