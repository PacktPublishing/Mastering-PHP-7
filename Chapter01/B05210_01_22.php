set_error_handler(function ($errno, $errstr) {
  throw new \Exception($errstr, $errno);
});
