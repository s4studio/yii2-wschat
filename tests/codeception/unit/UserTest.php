<?php
namespace tests\codeception\unit;

use s4studio\wschat\components\ChatRoom;
use s4studio\wschat\components\User;
use yii\codeception\TestCase;

/**
 * Class UserTest
 * @package tests\codeception\unit
 */
class UserTest extends TestCase
{
    protected $rid = 1;
    protected $id = 1;

    public function testInit()
    {
        $user = new User($this->id);
        $this->assertInstanceOf('s4studio\wschat\components\User', $user,
            'User should be instance of s4studio\wschat\components\User');
        $this->assertEquals($this->id, $user->getId(), 'Id\'s should match');
        $user->setRid($this->rid);
        $this->assertEquals($this->rid, $user->getRid(), 'Resource id\'s should match');
    }

    public function testUserChat()
    {
        $user = new User($this->id);
        $user->setChat(new ChatRoom());
        $chat = $user->getChat();
        $this->assertInstanceOf('s4studio\wschat\components\ChatRoom', $chat,
            'Chat should be instance of s4studio\wschat\components\ChatRoom');
        $users = $chat->getUsers();
        $this->assertEquals(1, count($users), 'Chat should contain only one user');
        $this->assertTrue(isset($users[$this->id]), 'User should be in chat');
        $this->assertInstanceOf('s4studio\wschat\components\User', $users[$this->id],
            'Chat user should be instance of s4studio\wschat\components\User');
    }
}