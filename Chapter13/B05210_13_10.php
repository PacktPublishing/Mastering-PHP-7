<?php

require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

interface ConfigInterface { /* ... */}
interface LoggerInterface { /* ... */}
class Config implements ConfigInterface { /* ... */}
class Logger implements LoggerInterface { /* ... */}
class App { /* ... */}

// Bootstrapping
$container = new ContainerBuilder();

$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('container.yml');

$container->compile();

// Client code
$app = $container->get('app');
$app->run();
