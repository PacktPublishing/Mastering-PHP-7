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

  public static abstract function func4();

  static public final function func5()
  {
  // body
  }
}

class Employee extends User
{
  public function func4()
  {
  // body
  }
}
