    <?php

    try {
      $value = 5 << -1;
    }
    catch (ArithmeticError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
