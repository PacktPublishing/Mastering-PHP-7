<?php

class User
{
  public $name = 'John';
  private $age = 34;
  protected $salary = 4200.00;

  public function __sleep()
  {
    // Cleanup & other operations???
    return ['name', 'salary'];
  }
}

$user = new User();

var_dump(serialize($user));
