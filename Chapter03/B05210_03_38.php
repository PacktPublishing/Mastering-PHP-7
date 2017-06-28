    <?php

    set_error_handler(function ($errno, $errstr, $errfile, $errline, $errcontext) {
    echo 'Handler: ' . $errstr;
    }, E_USER_ERROR | E_USER_WARNING);

    echo 'start';
      trigger_error('Ups!', E_USER_WARNING);
    echo 'end';
