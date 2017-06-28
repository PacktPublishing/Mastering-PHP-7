<?php

abstract class Logger
{
    private $logNext = null;

    public function logNext(Logger $logger)
    {
        $this->logNext = $logger;
        return $this->logNext;
    }

    final public function push($message)
    {
        $this->log($message);

        if ($this->logNext !== null) {
            $this->logNext->push($message);
        }
    }

    abstract protected function log($message);
}

class SystemLogger extends Logger
{
    public function log($message)
    {
        echo 'SystemLogger log!', PHP_EOL;
    }
}

class ElasticLogger extends Logger
{
    protected function log($message)
    {
        echo 'ElasticLogger log!', PHP_EOL;
    }
}

class MailLogger extends Logger
{
    protected function log($message)
    {
        echo 'MailLogger log!', PHP_EOL;
    }
}

// Client use
$systemLogger = new SystemLogger();
$elasticLogger = new ElasticLogger();
$mailLogger = new MailLogger();

$systemLogger
    ->logNext($elasticLogger)
    ->logNext($mailLogger);

$systemLogger->push('Stuff to log...');

//SystemLogger log!
//ElasticLogger log!
//MailLogger log!
