# Online users system

Simple library which allows you:

   * Check if user is online
   * Add or remove user from online list
   * Count online users
   * Get list of online users

## 
`composer require mikicaivosevic/online-users`

## Usage

```php
<?php
require_once 'vendor\autoload.php';

$client = \Mikica\Online\Users\ClientFactory::create();
$client->add('sample@example.com');
$client->count(); // 1
$client->add('sample@example.com');
$client->count(); // 1
$client->add('sample@hello.com');
$client->count(); // 2
$client->remove('sample@hello.com');
$client->count(); // 1
$client->isOnline('sample@example.com'); // true
$client->getOnlineUsers(); // Array ([0] => 'sample@example.com')
```

