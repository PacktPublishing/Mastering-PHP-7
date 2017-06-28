<?php

require './vendor/autoload.php';

$worker = new IronWorker\IronWorker();

$worker->postScheduleAdvanced(
  'ajzele/greet',
  ['name' => 'Mariya'],
  '2017-02-12T14:33:39+00:00'
);

$worker->postTask(
  'ajzele/greet',
  ['name' => 'Alice']
);
