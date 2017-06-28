<?php

$now = time();

while ($now + $argv[1] > time()) {
  echo 'signal ', microtime(), PHP_EOL;
  usleep(200000); // 0.2s
}
