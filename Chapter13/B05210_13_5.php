<?php

class App
{
    protected $config;
    protected $logger;

    public function __construct(Config $config, Logger $logger)
    {
        $this->config = $config;
        $this->logger = $logger;
    }

    public function run()
    {
        $this->config->setValue('executed_at', time());
        $this->logger->log('executed');
    }
}

class Config
{
    protected $config = [];

    public function setValue($path, $value)
    {
        // implementation
    }
}

class Logger
{
    public function log($message)
    {
        // implementation
    }
}

$config = new Config();
$logger = new Logger();

$app = new App($config, $logger);
$app->run();
