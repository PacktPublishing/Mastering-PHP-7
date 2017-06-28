<?php

class Customer
{
    public function __construct($mysqli)
    {
        // ...
    }

    public function loadByEmail($email)
    {
        // ...
    }
}

$mysqli = new mysqli('127.0.0.1', 'foggy', 'h4P9niq5', 'sakila');

$customer = new Customer($mysqli);
$customer->loadByEmail('MARY.SMITH@sakilacustomer.org');
