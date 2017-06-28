<?php

ini_set('memory_limit', '1M');

try {
  $content = '';
  while (true) {
    $content .= 'content';
  }
}
catch (\Error $e) {
  echo 'Caught ' . $e->getMessage();
}
