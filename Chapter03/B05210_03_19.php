    <?php

    try {
      $x = 5 / 0;
    }
    catch (DivisionByZeroError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
