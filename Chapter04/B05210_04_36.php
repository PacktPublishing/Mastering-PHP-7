<?php

class User
{
  private $data = [
    'name' => 'John',
    'age' => 34,
  ];

  public function __isset($name)
  {
    if (array_key_exists($name, $this->data)) {
      return true;
    }

    return false;
  }
}

$user = new User();

var_dump(isset($user->name));
