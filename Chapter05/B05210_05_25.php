#!/usr/bin/env php
<?php

for ($i = 1; $i <= 5; $i++) {
  $pid = pcntl_fork();

  if (!$pid) {
    echo 'Child ' . $i . PHP_EOL;
    sleep(2);
    exit;
  }
}
