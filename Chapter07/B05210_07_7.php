<?php

$content = file_get_contents('users.csv');
$lines = explode("\r\n", $content);

foreach ($lines as $line) {
  $user = str_getcsv($line);
  // Do something with data from $user...
}
