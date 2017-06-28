<?php

// side effect: change ini settings
ini_set('error_reporting', E_ALL);

// side effect: loads a file
include 'authenticate.php';

// side effect: generates output
echo "<h1>Hello</h1>";

// declaration
function log($msg)
{
 // body
}
