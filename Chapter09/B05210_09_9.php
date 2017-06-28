$mailer = new CallbackObserver(
  function ($user) {
    echo 'Mailer: ', $user, PHP_EOL;
  },
  function (\Throwable $t) {
    echo 'Mailer: ', $t->getMessage(), PHP_EOL;
  },
  function () {
    echo 'Mailer stream complete!', PHP_EOL;
  }
);

$logger = new CallbackObserver(
  function ($user) {
    echo 'Logger: ', $user, PHP_EOL;
  },
  function (\Throwable $t) {
    echo 'Logger: ', $t->getMessage(), PHP_EOL;
  },
  function () {
    echo 'Logger stream complete!', PHP_EOL;
  }
);

$users = Observable::fromIterator(users(__DIR__ . '/users.csv'));

$users->subscribe($mailer);
$users->subscribe($logger);
