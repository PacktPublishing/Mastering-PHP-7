<?php

class Customer
{
    protected $name;

    public function loadByEmail($email)
    {
        $mysqli = new mysqli('127.0.0.1', 'foggy', 'h4P9niq5', 'sakila');

        $statement = $mysqli->prepare('SELECT * FROM customer WHERE email = ?');
        $statement->bind_param('s', $email);
        $statement->execute();

        $customer = $statement->get_result()->fetch_object();

        $this->name = $customer->first_name . ' ' . $customer->last_name;

        return $this;
    }
}

$customer = new Customer();
$customer->loadByEmail('MARY.SMITH@sakilacustomer.org');
