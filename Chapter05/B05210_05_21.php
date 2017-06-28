#!/usr/bin/env php
<?php

declare(ticks = 1);

echo 'started' . PHP_EOL;

function signalHandler($signal)
{
  echo 'Triggered signalHandler: ' . $signal . PHP_EOL;
}

pcntl_signal(SIGALRM, 'signalHandler');
pcntl_alarm(7);

while (true) {
  echo 'loop ' . date('h:i:sa') . PHP_EOL;
  flush();
  sleep(2);
}

echo 'finished' . PHP_EOL;
