<?php

class User
{
 public final function __construct($name)
 {
 var_dump($name);
 }
}

class Director extends User
{

}

class Employee extends User
{
 public function __construct($name)
 {
 var_dump($name);
 }
}

new User('John'); #1
new Director('John'); #2
new Employee('John'); #3
