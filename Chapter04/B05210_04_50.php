<?php

class User
{
  protected $name;
  protected $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}

$user = new User('John', 34);
echo $user;
