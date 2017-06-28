<?php

trait A
{
  public static $counter = 0;

  public function theA()
  {
    return self::$counter;
  }
}

trait B
{
  use A;

  abstract public function theB();
}

class C
{
  use B;

  public function theB()
  {
    return self::$counter;
  }
}

$c = new C();
$c::$counter++;
echo $c->theA(); // 1
$c::$counter++;
$c::$counter++;
echo $c->theB(); // 3
