    <?php

    declare(strict_types = 1);

    function hello(string $name) {
      return "Hello $name!";
    }
    try {
      echo hello(34);
    }
    catch (TypeError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
