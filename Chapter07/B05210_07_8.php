<?php

if (($users = fopen('users.csv', 'r')) !== false) {
  while (($user = fgetcsv($users)) !== false) {
    // Do something with data from $user...
  }
  fclose($users);
}
