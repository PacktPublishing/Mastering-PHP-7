echo 'A';
$user = new User();
echo 'B';
exit;
echo 'C';

// outputs "AB__destruct"
