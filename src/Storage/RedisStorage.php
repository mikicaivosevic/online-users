<?php
namespace Mikica\Online\Users\Storage;

use Mikica\Online\Users\StorageInterface;
use Predis\Client as RedisClient;

class RedisStorage implements StorageInterface
{

    /** @var RedisClient $redisClient */
    private $redisClient;
    private $setName;

    /**
     * RedisStorage constructor.
     * @param null $parameters
     * @param null $options
     * @param string $setName
     */
    public function __construct($parameters = null, $options = null, $setName = 'online_users')
    {
        $this->redisClient = new RedisClient($parameters, $options);
        $this->setName = $setName;
    }

    /**
     * Add identifier in set
     * @param $identifier
     * @return int
     */
    public function add($identifier)
    {
        return $this->redisClient->sadd($this->setName, $identifier);
    }

    /**
     * Remove identifier from set
     * @param $identifier
     * @return int
     */
    public function remove($identifier)
    {
        return $this->redisClient->srem($this->setName, $identifier);
    }

    /**
     * Return number of unique identifiers in set
     * @return int
     */
    public function count()
    {
        return $this->redisClient->scard($this->setName);
    }

    /**
     * Check if specific identifier is in set
     * @param $identifier
     * @return int
     */
    public function isOnline($identifier)
    {
        return $this->redisClient->sismember($this->setName, $identifier);
    }

    /**
     * Return all identifiers from set
     * @return array
     */
    public function getOnlineUsers()
    {
        return $this->redisClient->smembers($this->setName);
    }

}