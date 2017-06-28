<?php

error_reporting(E_ALL);

class A
{
    public $x = 10;
    protected $y = 20;
    private $z = 30;

    public function x()
    {
        return $this->x;
    }

    protected function y()
    {
        return $this->y;
    }

    private function z()
    {
        return $this->z;
    }
}

class B extends A
{

}

$obj = new B();
var_dump($obj->x); // 10
var_dump($obj->y); // Uncaught Error: Cannot access protected property B::$y
var_dump($obj->z); // Notice: Undefined property: B::$z
var_dump($obj->x()); // 10
var_dump($obj->y()); // Uncaught Error: Call to protected method A::y() from context
var_dump($obj->z()); // Uncaught Error: Call to private method A::z() from context
