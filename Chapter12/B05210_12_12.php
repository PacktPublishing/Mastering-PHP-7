<?php

mysqli_report(MYSQLI_REPORT_ALL);

try {
   $mysqli = new mysqli('127.0.0.1', 'root', 'mL08e!Tq', 'sakila');
} catch (Throwable $t) {
   exit($t->getMessage());
}
