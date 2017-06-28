#!/usr/bin/env php
<?php

function generatePdf($content, $size)
{
  echo 'Started PDF ' . $size . ' - ' . date('h:i:sa') . PHP_EOL;
  sleep(3); /* simulate PDF generating */
  echo 'Finished PDF ' . $size . ' - ' . date('h:i:sa') . PHP_EOL;
}

$sizes = ['A1', 'A2', 'A3'];
$content = 'foggyline';

for ($i = 0; $i < count($sizes); $i++) {
  $pid = pcntl_fork();

  if (!$pid) {
    generatePdf($content, $sizes[$i]);
    exit($i);
  }
}

while (pcntl_waitpid(0, $status) != -1) {
  $status = pcntl_wexitstatus($status);
  echo "Child $status finished! - " . date('h:i:sa') . PHP_EOL;
}
