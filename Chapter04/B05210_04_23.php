<?php

class User extends \Magento\Framework\DataObject
{

}

$user = new User();

$user->setName('John');
$user->setAge(34);
$user->setSalary(4200.00);

echo $user->getName();
echo $user->getAge();
echo $user->getSalary();
