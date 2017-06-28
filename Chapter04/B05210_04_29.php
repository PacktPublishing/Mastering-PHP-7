<?php

class User
{
  private $data = array();

  private $name;
  protected $age;
  public $salary;

  public function __set($name, $value)
  {
    $this->data[$name] = $value;
  }
}

$user = new User();
$user->name = 'John';
$user->age = 34;
$user->salary = 4200.00;
$user->message = 'hello';

var_dump($user);
