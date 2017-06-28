    <?php

    ini_set('log_errors', 1);
    ini_set('error_log', dirname(__FILE__) . '/app-error.log');

    $headers = "From: john@server.loc\r\n";
    $headers .= "Subject: My PHP email logger\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    error_log('<html><h2>Test!</h2></html>', 1, 'john@mail.com', $headers);
