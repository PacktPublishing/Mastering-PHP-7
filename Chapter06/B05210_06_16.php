<?php

class User {
  public $name = 'N/A';
  public $age = 0;
}

$user = new User();
$employee = $user;

var_dump($user == $employee); // true
var_dump($user === $employee); // true
