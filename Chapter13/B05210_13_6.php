<?php

class App
{
    protected $config;
    protected $logger;

    public function __construct(ConfigInterface $config, LoggerInterface $logger)
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

interface ConfigInterface
{
    public function getValue($value);

    public function setValue($path, $value);
}

interface LoggerInterface
{
    public function log($message);
}

class Config implements ConfigInterface
{
    protected $config = [];

    public function getValue($value)
    {
        // implementation
    }

    public function setValue($path, $value)
    {
        // implementation
    }
}

class Logger implements LoggerInterface
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
