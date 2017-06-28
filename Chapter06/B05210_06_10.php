<?php

$user = [
  'name' => 'John',
  'age' => 34,
  'salary' => 4200.00
];

foreach ($user as $k => $v) {
  echo "key: $k, value: $v" . PHP_EOL;
}
