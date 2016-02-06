<?php
namespace Mikica\Online\Users;

interface StorageInterface
{
    /**
     * Add identifier to storage
     * @param $identifier
     * @return mixed
     */
    public function add($identifier);

    /**
     * Remove identifier from storage
     * @param $identifier
     * @return mixed
     */
    public function remove($identifier);

    /**
     * Count number of inserts in storage
     * @return mixed
     */
    public function count();

    /**
     * Check if passed identifier is in storage
     * @param $identifier
     * @return mixed
     */
    public function isOnline($identifier);

    /**
     * Return all identifiers from storage
     * @return mixed
     */
    public function getOnlineUsers();
}