<?php

// Case 1
try {
    $mailer = new Mailer($transport);
} catch (\Throwable $e) {
    echo 'Caught!';
} finally {
    echo 'Cleanup!';
}

// Case 2
try {
    $mailer = new Mailer($transport);
} catch (\Error $e) {
    echo 'Caught!';
} finally {
    echo 'Cleanup!';
}
