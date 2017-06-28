<?php

$users = ['John', 'Marcy', 'Alice', 'Jack'];

ob_start();
foreach ($users as $user) {
  echo 'User: ' . $user . PHP_EOL;
}
$report = ob_get_contents();
ob_end_clean();

ob_start();
echo 'Listing users:' . PHP_EOL;
ob_end_flush();

echo $report;

echo 'Total of ' . count($users) . ' users listed' . PHP_EOL;

//Listing users:
//User: John
//User: Marcy
//User: Alice
//User: Jack
//Total of 4 users listed
