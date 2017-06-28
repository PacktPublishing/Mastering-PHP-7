<?php

class User
{
  public function __invoke($name, $age)
  {
    echo $name . ', ' . $age;
  }
}
