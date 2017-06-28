#!/usr/bin/env php
<?php

declare(ticks = 1);

echo 'started' . PHP_EOL;

function signalHandler($signal)
{
  echo 'Triggered signalHandler: ' . $signal . PHP_EOL;
  // exit;
}

pcntl_signal(SIGINT, 'signalHandler');

$loop = 0;
while (true) {
  echo 'loop ' . (++$loop) . PHP_EOL;
  flush();
  sleep(2);
}

echo 'finished' . PHP_EOL;
