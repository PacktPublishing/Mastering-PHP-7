<?php

class User
{
  function hello($name)
  {
    return 'Hello ' . $name;
  }
}

// Case 1 - working
try {
  $user = new User();
  $user->greeting('John');
}
catch (Error $e) {
  echo 'Caught: ' . $e->getMessage();
}

// Case 2 - working
try {
  $user = new User();
  $user->greeting('John');
}
catch (Throwable $t) {
  echo 'Caught: ' . $t->getMessage();
}
