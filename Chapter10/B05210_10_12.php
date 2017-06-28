<?php

interface LoggerInterface
{
    public function log($message);
}

class Logger implements LoggerInterface
{
    public function log($message)
    {
        file_put_contents('app.log', $message . PHP_EOL, FILE_APPEND);
    }
}

abstract class LoggerDecorator implements LoggerInterface
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    abstract public function log($message);
}

class ErrorLogger extends LoggerDecorator
{
    public function log($message)
    {
        $this->logger->log('ErrorLogger: ' . $message);
    }
}

class WarningLogger extends LoggerDecorator
{
    public function log($message)
    {
        $this->logger->log('WarningLogger: ' . $message);
    }
}

class NoticeLogger extends LoggerDecorator
{
    public function log($message)
    {
        $this->logger->log('NoticeLogger: ' . $message);
    }
}

// Client use
(new Logger())->log('Test Logger.');

(new ErrorLogger(new Logger()))->log('Test ErrorLogger.');

(new WarningLogger(new Logger()))->log('Test WarningLogger.');

(new NoticeLogger(new Logger()))->log('Test NoticeLogger.');
