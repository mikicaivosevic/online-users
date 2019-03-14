<?php
namespace Mikica\Online\Users;

class Client
{
    /** @var  StorageInterface $onlineUsers */
    private $onlineUsers;

    /**
     * OnlineUsers constructor.
     * @param StorageInterface $onlineUsers
     */
    public function __construct(StorageInterface $onlineUsers)
    {
        $this->onlineUsers = $onlineUsers;
    }


    /**
     * Add identifier to storage
     * @param $identifier
     * @return mixed
     */
    public function add($identifier)
    {
        return $this->onlineUsers->add($identifier);
    }

    /**
     * Remove identifier from storage
     * @param $identifier
     * @return mixed
     */
    public function remove($identifier)
    {
        return $this->onlineUsers->remove($identifier);
    }

    /**
     * Count number of inserts in storage
     * @return mixed
     */
    public function count()
    {
        return $this->onlineUsers->count();
    }

    /**
     * Check if passed identifier is in storage
     * @param $identifier
     * @return mixed
     */
    public function isOnline($identifier)
    {
        return $this->onlineUsers->isOnline($identifier);
    }

    /**
     * Return all identifiers from storage
     * @return mixed
     */
    public function getOnlineUsers()
    {
        return $this->onlineUsers->getOnlineUsers();
    }
}
