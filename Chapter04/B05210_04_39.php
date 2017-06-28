<?php

class User
{
  private $data = [
    'name' => 'John',
    'age' => 34,
  ];

  public function __unset($name)
  {
    unset($this->data[$name]);
  }
}

$user = new User();

var_dump($user);
unset($user->age);
unset($user->salary);
var_dump($user);
