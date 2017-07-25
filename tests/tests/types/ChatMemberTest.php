<?php
/**
 * @author Sergey Vasilev <doozookn@gmail.com>
 */

use Tigris\Telegram\Exceptions\TypeException;
use Tigris\Telegram\Types\ChatMember;
use Tigris\Telegram\Types\User;

class ChatMemberTest extends \PHPUnit\Framework\TestCase
{
    public function testParse()
    {
        $a = ChatMember::parse([
            'user' => [
                'id' => 1147,
                'first_name' => 'Tigris',
                'last_name' => 'Bot',
                'username' => '@tigrisbot',
            ],
            'status' => 'creator',
        ]);

        $this->assertInstanceOf(ChatMember::class, $a);
        $this->assertAttributeInstanceOf(User::class, 'user', $a);
        $this->assertAttributeSame('creator', 'status', $a);

        $b = ChatMember::parse($a);
        $this->assertSame($b, $a);

        $z = ChatMember::parse(null);
        $this->assertNull($z);

        try {
            ChatMember::parse(111);
            $this->fail('Expected exception not thrown');
        } catch (\Exception $e) {
            $this->assertInstanceOf(TypeException::class, $e);
        }
    }
}