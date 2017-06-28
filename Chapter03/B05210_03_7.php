<?php

try {
  throw new ArithmeticError('Missing numbers!');
}
catch (Throwable $t) {
  echo $t->getMessage();
}
