<?php

class User
{
  public $salary = 4200;
}

function bonus(User $u)
{
  $u->salary = $u->salary + 500;
}

$user = new User();
echo $user->salary; // 4200
bonus($user);
echo $user->salary; // 4700
