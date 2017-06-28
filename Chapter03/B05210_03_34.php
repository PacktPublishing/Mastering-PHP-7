    <?php

    declare(strict_types = 1);

    try {
      echo strlen('test', 'extra');
    }
    catch (TypeError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
