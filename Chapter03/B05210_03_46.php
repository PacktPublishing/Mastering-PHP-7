    <?php

    set_exception_handler(function (Throwable $t) {
      echo 'Throwable Handler: ' . $t->getMessage();
    });

    echo 'start';
     throw new Exception('Ups!');
    echo 'end';
