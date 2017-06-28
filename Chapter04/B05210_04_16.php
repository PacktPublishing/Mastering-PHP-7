echo 'A';
$user = new User();
echo 'B';
unset($user);
echo 'C';

// outputs "AB__destructC"
