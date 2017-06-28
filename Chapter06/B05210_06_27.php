<?php

class User
{
  public $name = 'John';
  protected $ssn = 'AAA-GG-SSSS';
  private $salary = 4200.00;
}

$user = new User();

echo $user->name = 'Marc'; // Marc

//echo $user->ssn = 'BBB-GG-SSSS';
// Uncaught Error: Cannot access protected property User::$ssn

//echo $user->salary = 5600.00;
// Uncaught Error: Cannot access private property User::$salary

var_dump($user);
//object(User)[1]
// public 'name' => string 'Marc' (length=4)
// protected 'ssn' => string 'AAA-GG-SSSS' (length=11)
// private 'salary' => float 4200
