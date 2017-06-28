<?php

class User
{
  public $name = 'John';
  public $age = 34;
  private $salary = 4200.00;
  private $bonus = 680.00;
  protected $identifier = 'ABC';
  protected $logins = 67;

  public function __debugInfo()
  {
    return [
      'name' => $this->name,
      'income' => $this->salary + $this->bonus
    ];
  }
}

$user = new User();

var_dump($user);
