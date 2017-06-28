<?php

echo 'start', PHP_EOL;

$process = proc_open('php beacon.php 2', [
  ['pipe', 'r'], // STDIN
  ['pipe', 'w'], // STDOUT
  ['file', './signals.log', 'a'] //STDERR
], $pipes);

//stream_set_blocking($pipes[1], 1); // Blocking I/O
//stream_set_blocking($pipes[1], 0); // Non-blocking I/O

while (proc_get_status($process)['running']) {
  usleep(100000); // 0.1s
  if ($signal = fgets($pipes[1])) {
    echo $signal;
  } else {
    echo '--- beacon lost ---', PHP_EOL;
  }
}

fclose($pipes[1]);
proc_close($process);

echo 'end', PHP_EOL;
