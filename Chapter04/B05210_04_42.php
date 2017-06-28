<?php

$age = 34;
$name = 'John';

$obj = new stdClass();
$obj->age = 34;
$obj->name = 'John';

var_dump(serialize($age));
var_dump(serialize($name));
var_dump(serialize($obj));
