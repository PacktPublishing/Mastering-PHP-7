<?php

class User {
  public $name = 'N/A';
  public $age = 0;
}

$user = new User();
$employee = new User();

var_dump($user == $employee); // true
var_dump($user === $employee); // false
