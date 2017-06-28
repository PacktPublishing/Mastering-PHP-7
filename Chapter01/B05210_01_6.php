class A {}
class B extends A {}
class C extends B {}

function getInstance(string $type) : A {
    if ($type == 'A') {
       return new A();
       } elseif ($type == 'B') {
           return new B();
       } else {
           return new C();
       }
  }

getInstance('A'); #object(A)#1 (0) { }
getInstance('B'); #object(B)#1 (0) { }
getInstance('XYZ'); #object(C)#1 (0) { }
