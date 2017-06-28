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

  public function __toString()
  {
    return $this->name . ', age ' . $this->age;
  }
}

$user = new User('John', 34);
echo $user;
