<?php

class Util
{
  function hello($msg)
  {
    $msg = "<p>Welcome $msg</p>";
    return $msg;
  }
}

$str = 'John';

$obj = new Util();
echo $obj->hello($str); // Welcome John

echo $str; // John
