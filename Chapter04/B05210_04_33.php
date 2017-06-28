<?php

class User
{
  private $data = [
    'name' => 'Marry',
    'age' => 32,
    'salary' => 5300.00,
  ];

  private $name = 'John';
  protected $age = 34;
  public $salary = 4200.00;

  public function __get($name)
  {
    if (array_key_exists($name, $this->data)) {
      echo '__get => ' . $name . ': ' . $this->data[$name] . PHP_EOL;
    } else {
      trigger_error('Undefined property: ' . $name, E_USER_NOTICE);
    }
  }
}

$user = new User();

echo $user->name . PHP_EOL;
echo $user->age . PHP_EOL;
echo $user->salary . PHP_EOL;
echo $user->message . PHP_EOL;
