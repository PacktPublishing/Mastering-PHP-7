<?php

class User
{
  public $name = 'John';
  public $age = 34;
  public $salary = 4200.00;
}

$user = new User();

foreach ($user as $k => $v) {
  echo "key: $k, value: $v" . PHP_EOL;
}
