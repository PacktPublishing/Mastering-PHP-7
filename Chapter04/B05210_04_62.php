<?php

class User
{
  public $name = 'John';
  public $age = 34;
  private $salary = 4200.00;
  protected $identifier = 'ABC';

  public static function __set_state($properties)
  {
    $user = new User();

    $user->name = $properties['name'];
    $user->age = $properties['age'];
    $user->salary = $properties['salary'];
    $user->identifier = $properties['identifier'];

    return $user;
  }
}

$user = new User();
$user->name = 'Mariya';
$user->age = 32;

eval('$obj = ' . var_export($user, true) . ';');

var_dump($obj);
