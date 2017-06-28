    <?php

    set_error_handler(function ($errno, $errstr) {
      echo 'Handler: ' . $errstr;
    });

    echo 'start';
    trigger_error('E_USER_ERROR!', E_USER_ERROR);
    trigger_error('E_USER_ERROR!', E_USER_WARNING);
    trigger_error('E_USER_ERROR!', E_USER_NOTICE);
    trigger_error('E_USER_ERROR!', E_USER_DEPRECATED);
    echo 'end';
