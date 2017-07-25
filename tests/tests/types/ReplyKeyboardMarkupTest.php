<?php

use Tigris\Telegram\Exceptions\TypeException;
use Tigris\Telegram\Types\Interfaces\ReplyMarkupInterface;
use Tigris\Telegram\Types\ReplyKeyboardMarkup;

Class ReplyKeyboardMarkupTest extends  \PHPUnit\Framework\TestCase
{
    public function testCreate()
    {
        $a = ReplyKeyboardMarkup::create([
                'keyboard' => [
                    'text' => 'foo'
                ]
        ]);

        $this->assertInstanceOf(ReplyKeyboardMarkup::class, $a);
        $this->assertInstanceOf(ReplyMarkupInterface::class, $a);

        $b = ReplyKeyboardMarkup::parse($a);
        $this->assertSame($a, $b);

        $z = ReplyKeyboardMarkup::parse(null);
        $this->assertNull($z);

        try {
            ReplyKeyboardMarkup::parse([]);
            $this->fail(['Not exception']);
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }



    }
}