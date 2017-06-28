<?php

class User implements \Iterator
{
  public $name = 'John';
  private $age = 34;
  protected $salary = 4200.00;

  private $info = [];

  public function __construct()
  {
    $this->info = [
      'name' => $this->name,
      'age' => $this->age,
      'salary' => $this->salary
    ];
  }

  public function current()
  {
    return current($this->info);
  }

  public function next()
  {
    return next($this->info);
  }

  public function key()
  {
    return key($this->info);
  }

  public function valid()
  {
    $key = key($this->info);
    return ($key !== null && $key !== false);
  }

  public function rewind()
  {
    return reset($this->info);
  }
}
