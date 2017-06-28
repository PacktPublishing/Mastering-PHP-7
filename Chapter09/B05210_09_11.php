use \Rx\Subject\Subject;

$mailer = new class() extends Subject
{
    public function onCompleted()
    {
        echo 'mailer.onCompleted', PHP_EOL;
        parent::onCompleted();
    }

    public function onNext($val)
    {
        echo 'mailer.onNext: ', $val, PHP_EOL;
        parent::onNext($val);
    }

    public function onError(\Throwable $error)
    {
        echo 'mailer.onError', $error->getMessage(), PHP_EOL;
        parent::onError($error);
    }
};


$logger = new class() extends Subject
{
    public function onCompleted()
    {
        echo 'logger.onCompleted', PHP_EOL;
        parent::onCompleted();
    }

    public function onNext($val)
    {
        echo 'logger.onNext: ', $val, PHP_EOL;
        parent::onNext($val);
    }

    public function onError(\Throwable $error)
    {
        echo 'logger.onError', $error->getMessage(), PHP_EOL;
        parent::onError($error);
    }
};

$users = Observable::fromIterator(users(__DIR__ . '/users.csv'));
$mailer->subscribe($logger);
$users->subscribe($mailer);
