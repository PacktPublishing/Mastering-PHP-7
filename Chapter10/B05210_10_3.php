<?php

class Logger
{
    public $channel = 'N/A';
}

class SystemLogger extends Logger
{
    public function __construct()
    {
        $this->channel = 'STDIN';
    }

    public function log($data)
    {
        return sprintf('Logging %s to %s.', $data, $this->channel);
    }

    public function __clone()
    {
        /* additional changes for (after)clone behavior? */
    }
}

// Client use
$systemLogger = new SystemLogger();
echo $systemLogger->log('test');

$logger = clone $systemLogger;
echo $logger->log('test2');

$logger->channel = 'mail';
echo $logger->log('test3');

// Logging test to STDIN.
// Logging test2 to STDIN.
// Logging test3 to mail.
