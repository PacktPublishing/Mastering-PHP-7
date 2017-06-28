class B extends A
{
  public function test()
  {
    var_dump($this->x); // 10
    var_dump($this->y); // 20
    var_dump($this->z); // Notice: Undefined property: B::$z
    var_dump($this->x()); // 10
    var_dump($this->y()); // 20
    var_dump($this->z()); // Uncaught Error: Call to private method
      A::z() from context 'B'
  }
}

$obj = new B();
$obj->test();
