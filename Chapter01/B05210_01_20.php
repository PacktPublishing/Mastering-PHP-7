<?php

class Mailer
{
    private $transport;

    public function __construct(Transport $transport)
    {
        $this->transport = $transport;
    }
}

$transport = new stdClass();

try {
    $mailer = new Mailer($transport);
} catch (\Exception $e) {
    echo 'Caught!';
} finally {
    echo 'Cleanup!';
}
