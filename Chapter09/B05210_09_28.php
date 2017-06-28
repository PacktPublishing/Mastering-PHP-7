<?php

// stream_set_blocking(STDIN, 0);
// stream_set_blocking(STDIN, 1); // default

echo 'start', PHP_EOL;

while (($line = fgets(STDIN)) !== false) {
  echo $line;
}

echo 'end', PHP_EOL;
