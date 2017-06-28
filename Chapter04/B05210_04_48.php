<?php

class Backup
{
  protected $ftpClient;
  protected $ftpHost;
  protected $ftpUser;
  protected $ftpPass;

  public function __construct($host, $username, $password)
  {
    $this->ftpHost = $host;
    $this->ftpUser = $username;
    $this->ftpPass = $password;

    echo 'TEST!!!' . PHP_EOL;

    $this->connect();
  }

  public function connect()
  {
    $this->ftpClient = ftp_connect($this->ftpHost, 21, 5);
    ftp_login($this->ftpClient, $this->ftpUser, $this->ftpPass);
  }

  public function __sleep()
  {
    return ['ftpHost', 'ftpUser', 'ftpPass'];
  }

  public function __wakeup()
  {
    $this->connect();
  }
}

$backup = new Backup('test.rebex.net', 'demo', 'password');
$serialized = serialize($backup);
$unserialized = unserialize($serialized);

var_dump($backup);
var_dump($serialized);
var_dump($unserialized);
