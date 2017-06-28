    <?php

    declare(strict_types = 1);

    function hello($name): string {
      return strlen($name);
    }

    try {
      echo hello('branko');
    }
    catch (TypeError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
