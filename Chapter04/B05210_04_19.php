<?php

class User
{
 public function __call($name, $arguments)
 {
 echo $name . ': ' . implode(', ', $arguments) . PHP_EOL;
 }

 public function bonus($amount)
 {
 echo 'bonus: ' . $amount . PHP_EOL;
 }
}

$user = new User();
$user->hello('John', 34);
$user->bonus(560.00);
$user->salary(4200.00);
