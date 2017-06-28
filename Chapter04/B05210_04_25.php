<?php

class User
{
  public static function __callStatic($name, $arguments)
  {
    echo '__callStatic => ' . $name . ': ' . implode(', ', $arguments)
      . PHP_EOL;
  }

  public static function bonus($amount)
  {
  echo 'bonus: ' . $amount . PHP_EOL;
  }
}
