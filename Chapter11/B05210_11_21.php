<?php

class User
{
    public $name;
    public $age;
    public $salary;
}

$user = new User();
$user->name = 'John';
$user->age = 34;
$user->salary = 4200.50;

echo json_encode($user);
// {"name":"John","age":34,"salary":4200.5}

$employees = ['John', 'Mariya', 'Sarah', 'Marc'];

echo json_encode($employees);
// ["John","Mariya","Sarah","Marc"]
