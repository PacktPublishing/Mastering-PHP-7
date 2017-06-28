<?php

ob_start(); // BUFFER#1
sleep(2);
echo 'Chunk #1' . PHP_EOL;

 ob_start(); // BUFFER#2
 sleep(2);
 echo 'Chunk #2' . PHP_EOL;
 ob_start(); // BUFFER#3
 sleep(2);
 echo 'Chunk #3' . PHP_EOL;
 ob_end_flush();
 ob_end_flush();

sleep(2);
echo 'Chunk #4' . PHP_EOL;
ob_end_flush();

//Chunk #1
//Chunk #2
//Chunk #3
//Chunk #4
