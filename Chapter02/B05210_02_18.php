<?php

abstract class User
{

  public function func1()
  {
  // body
  }

  private function func2()
  {
  // body
  }

  protected function func3()
  {
  // body
  }

  abstract public static function func4();

  final public static function func5()
  {
  // body
  }
}

class Employee extends User
{
  public static function func4()
  {
  // body
  }
}
