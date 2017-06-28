    <?php

    function throwableHandler(Throwable $t)
    {
      echo 'Throwable Handler: ' . $t->getMessage();
    }

    set_exception_handler('throwableHandler');

    echo 'start';
      throw new Exception('Ups!');
    echo 'end';
