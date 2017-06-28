// valid
class A {}
class B extends A {}
class C extends B {}

// invalid
class A {}
class B {}
class C extends A, B {}
