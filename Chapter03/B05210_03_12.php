    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    ini_set('memory_limit', '1M');

    try {
      str_pad('', PHP_INT_MAX);
    }
    catch (Throwable $t) {
      echo 'Caught ' . $t->getMessage();
    }
