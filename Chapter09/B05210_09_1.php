<?php

class UserRegister implements \SplSubject
{
    protected $user;
    protected $observers;

    public function __construct($user)
    {
        $this->user = $user;
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getUser()
    {
        return $this->user;
    }
}

class Mailer implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        if ($subject instanceof UserRegister) {
            echo 'Mailing ', $subject->getUser(), PHP_EOL;
        }
    }
}

class Logger implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        if ($subject instanceof UserRegister) {
            echo 'Logging ', $subject->getUser(), PHP_EOL;
        }
    }
}

$userRegister = new UserRegister('John');
// some code...
$userRegister->attach(new Mailer());
// some code...
$userRegister->attach(new Logger());
// some code...
$userRegister->notify();
