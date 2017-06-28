<?php

fwrite(STDOUT, "Type something: ");
$line = fgets(STDIN);
fwrite(STDOUT, 'You typed: ' . $line);
fwrite(STDERR, 'Triggered STDERR!' . PHP_EOL);
