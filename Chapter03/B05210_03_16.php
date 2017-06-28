    <?php

    try {
      intdiv(PHP_INT_MIN, -1);
    }
    catch (ArithmeticError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
