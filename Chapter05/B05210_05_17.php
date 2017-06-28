<?php

declare (ticks = 2);

echo 'started' . PHP_EOL;

function tickLogger()
{
  echo 'Tick logged!' . PHP_EOL;
}

register_tick_function('tickLogger');

for ($i = 1; $i <= 10; $i++) {
  echo '$i => ' . $i . PHP_EOL;
}

echo 'finished' . PHP_EOL;
