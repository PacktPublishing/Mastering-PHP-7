<?php

class User
{
  protected $name;
  protected $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
    var_dump($this->name);
    var_dump($this->age);
  }
}

new User; #1
new User('John'); #2
new User('John', 34); #3
new User('John', 34, 4200.00); #4
