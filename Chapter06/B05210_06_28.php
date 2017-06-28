<?php

// ...

$user = new User();

$reflector = new ReflectionClass('User');

foreach ($reflector->getProperties() as $prop) {
  $prop->setAccessible(true);
  if ($prop->getName() == 'name') $prop->setValue($user, 'Alice');
  if ($prop->getName() == 'ssn') $prop->setValue($user, 'CCC-GG-SSSS');
  if ($prop->getName() == 'salary') $prop->setValue($user, 2600.00);
}

var_dump($user);

//object(User)[1]
// public 'name' => string 'Alice' (length=5)
// protected 'ssn' => string 'CCC-GG-SSSS' (length=11)
// private 'salary' => float 2600
