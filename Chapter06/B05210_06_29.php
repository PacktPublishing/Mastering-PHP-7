<?php

class Calc
{
  /**
  * @param $x The number x
  * @param $y The number y
  * @return mixed The number z
  */
  public function sum($x, $y)
  {
    return $x + $y;
  }
}

$calc = new Calc();

$reflector = new ReflectionClass('Calc');
$comment = $reflector->getMethod('sum')->getDocComment();

echo $comment;
