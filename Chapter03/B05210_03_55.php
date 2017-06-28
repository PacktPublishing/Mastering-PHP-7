    <?php

    require 'vendor/autoload.php';

    use Monolog\Logger;
    use Monolog\Handler\RotatingFileHandler;
    use Monolog\Handler\BrowserConsoleHandler;

    $logger = new Logger('foggyline');

    $logger->pushHandler(new RotatingFileHandler(__DIR__ . '/foggyline.log'), 7);
    $logger->pushHandler(new BrowserConsoleHandler());

    $context = [
      'user' => 'john',
      'salary' => 4500.00
    ];

    $logger->addDebug('Logging debug', $context);
    $logger->addInfo('Logging info', $context);
    $logger->addNotice('Logging notice', $context);
    $logger->addWarning('Logging warning', $context);
    $logger->addError('Logging error', $context);
    $logger->addCritical('Logging critical', $context);
    $logger->addAlert('Logging alert', $context);
    $logger->addEmergency('Logging emergency', $context);
