<?php

class Customer
{
    public function loadByEmail($email, $mysqli)
    {
        // ...
    }
}

$mysqli = new mysqli('127.0.0.1', 'foggy', 'h4P9niq5', 'sakila');

$customer = new Customer();
$customer->loadByEmail('MARY.SMITH@sakilacustomer.org', $mysqli);
