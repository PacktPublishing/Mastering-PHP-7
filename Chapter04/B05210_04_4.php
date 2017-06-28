<?php

class User
{
  protected $name;
  protected $age;

  public function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }
}

class Employee extends User
{
  public function __construct($employeeName, $employeeAge)
  {
    var_dump($this->name);
    var_dump($this->age);
  }
}

new Employee('John', 34);
