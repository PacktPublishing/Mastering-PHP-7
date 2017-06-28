<?php


class ObjectPool
{
    private $instances = [];

    public function load($key)
    {
        return $this->instances[$key];
    }

    public function save($object, $key)
    {
        $this->instances[$key] = $object;
    }
}

class User
{
    public function hello($name)
    {
        return 'Hello ' . $name;
    }
}

// Client use
$pool = new ObjectPool();

$user = new User();
$key = spl_object_hash($user);

$pool->save($user, $key);

// code...

$user = $pool->load($key);
echo $user->hello('John');
