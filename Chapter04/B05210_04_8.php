<?php

class User
{
  public function __construct()
  {
    var_dump('__construct');
  }

  public static function hello($name)
  {
    return 'Hello ' . $name;
  }
}

echo User::hello('John');
