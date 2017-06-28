<?php

class User
{
  public $name = 'John';
  public $age = 34;
  private $salary = 4200.00;
  protected $identifier = 'ABC';
}

$user = new User();
var_export($user); // outputs string "User::__set_state..."
var_export($user, true); // returns string "User::__set_state..."
