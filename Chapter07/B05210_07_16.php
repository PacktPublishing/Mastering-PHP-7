<?php

ob_start();
sleep(2);
echo 'Chunk#1' . PHP_EOL;
sleep(3);
ob_end_flush();

ob_start();
echo 'Chunk#2' . PHP_EOL;
sleep(5);
ob_end_clean();

ob_start();
echo 'Chunk#3' . PHP_EOL;
ob_end_flush();

ob_start();
sleep(5);
echo 'Chunk#4' . PHP_EOL;

//Chunk#1
//Chunk#3
//Chunk#4
