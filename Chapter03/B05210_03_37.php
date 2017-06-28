    <?php

    function handler($errno, $errstr, $errfile, $errline, $errcontext)
    {
      echo 'Handler: ' . $errstr;
    }

    set_error_handler('handler', E_USER_ERROR | E_USER_WARNING);

    echo 'start';
      trigger_error('Ups!', E_USER_ERROR);
    echo 'end';
