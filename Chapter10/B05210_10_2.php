<?php

class Logger
{
    private static $instance;

    const TYPE_ERROR = 'error';
    const TYPE_WARNING = 'warning';
    const TYPE_NOTICE = 'notice';

    protected function __construct()
    {
        // empty?!
    }

    private function __clone()
    {
        // empty?!
    }

    private function __wakeup()
    {
        // empty?!
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            // late static binding
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function log($type, $message)
    {
        return sprintf('Logging %s: %s', $type, $message);
    }
}

// Client use
echo Logger::getInstance()->log(Logger::TYPE_NOTICE, 'test');
