<?php

var_dump(2 == 2); // true
var_dump(2 == "2"); // true
var_dump(2 == "2ABC"); // true

var_dump(2 === 2); // true
var_dump(2 === "2"); // false
var_dump(2 === "2ABC"); // false
