<?php

class User
{
  public function __construct()
  {
    var_dump('__construct');
  }
}

new User;
new User();
