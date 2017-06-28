<?php

class Registry
{
    private
        $registry = [];

    public
    function get($key)
    {
        if (isset($this->registry[$key])) {
            return $this->registry[$key];
        }
        return null;
    }

    public
    function set($key, $value, $graceful = false)
    {
        if (isset($this->registry[$key])) {
            if ($graceful) {
                return;
            }
            throw new \RuntimeException('Registry key "' . $key . '"already exists');
        }
        $this->registry[$key] = $value;
    }

    public
    function remove($key)
    {
        if (isset($this->registry[$key])) {
            unset($this->registry[$key]);
        }
    }

    public
    function __destruct()
    {
        $keys = array_keys($this->registry);
        array_walk($keys, [$this, 'remove']);
    }
}

// Client use
class User
{
    public $name;
}

$user1 = new User();
$user1->name = 'John';
$user2 = new User();
$user2->name = 'Marc';

$registry = new Registry();
$registry->set('employee', $user1);
$registry->set('director', $user2);
echo $registry->get('director')->name; // Marc
