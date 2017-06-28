function signalHandler($signal)
{
  echo 'Triggered signalHandler: ' . $signal . PHP_EOL;
  pcntl_alarm(3);
}
