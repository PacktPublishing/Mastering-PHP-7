<?php

// declaration
function log()
{
 // body
}

// conditional declaration is *not* a side effect
if (!function_exists('hello')) {
 function hello($msg)
 {
 // body
 }
}
