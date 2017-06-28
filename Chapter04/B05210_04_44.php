<?php

class User
{
  public $name = 'John';
  private $age = 34;
  protected $salary = 4200.00;
}

$user = new User();

var_dump(serialize($user));
