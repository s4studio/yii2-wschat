<?php
namespace s4studio\wschat\components;

/**
 * Class ChatRoom
 * @package \s4studio\wschat\components
 */
class ChatRoom
{
    public $title;
    /** @var string */
    private $uid;
    /** @var \s4studio\wschat\components\User[] */
    private $users = [];

    /**
     * Set chat room unique id
     *
     * @access public
     * @param $uid
     * @return void
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * Get chat room unique id
     *
     * @access public
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Get chat room user list
     *
     * @access public
     * @return \s4studio\wschat\components\User[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Add user to chat room
     *
     * @access public
     * @param \s4studio\wschat\components\User $user
     * @return void
     */
    public function addUser(User $user)
    {
        $this->users[$user->getId()] = $user;
    }

    /**
     * Remove user from chat room
     *
     * @access public
     * @param \s4studio\wschat\components\User $user
     * @return void
     */
    public function removeUser(User $user)
    {
        unset($this->users[$user->getId()]);
    }
}

 