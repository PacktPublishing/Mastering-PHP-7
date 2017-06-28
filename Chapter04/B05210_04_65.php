<?php

class User
{
  public $identifier;

  public function __clone()
  {
    $this->identifier = null;
  }
}

$user = new User();
$user->identifier = 'john';

$user2 = clone $user;

var_dump($user);
var_dump($user2);
