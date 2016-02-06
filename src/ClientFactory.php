<?php
namespace Mikica\Online\Users;


class ClientFactory
{
    /**
     * @param StorageInterface|null $storageInterface
     * @return Client
     */
    public static function create(StorageInterface $storageInterface = null)
    {
        if ($storageInterface == null) {
            return new Client(new RedisStorage());
        }
        return new Client($storageInterface);
    }
}