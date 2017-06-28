<?php

trait Message
{
  private function hello()
  {
     return 'Hello!';
  }
}

class User
{
  use Message {
    hello as public;
  }
}

$user = new User();
echo $user->hello(); // Hello!
