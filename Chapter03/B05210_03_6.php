interface Throwable
 | Error implements Throwable
   | TypeError extends Error
   | ParseError extends Error
   | ArithmeticError extends Error
     | DivisionByZeroError extends ArithmeticError
   | AssertionError extends Error
 | Exception implements Throwable
   | ...
