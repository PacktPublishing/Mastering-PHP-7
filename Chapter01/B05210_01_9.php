class User {}
class Salary {}

function gen() {
 return new class() {};
}

$obj = new class() {};
$obj2 = new class() {};
$obj3 = new class() extends User {};
$obj4 = new class() extends Salary {};
$obj5 = gen();
$obj6 = gen();

echo get_class($obj); // class@anonymous/var/www/index.php0x27fe03a
echo get_class($obj2); // class@anonymous/var/www/index.php0x27fe052
echo get_class($obj3); // class@anonymous/var/www/index.php0x27fe077
echo get_class($obj4); // class@anonymous/var/www/index.php0x27fe09e
echo get_class($obj5); // class@anonymous/var/www/index.php0x27fe04f
echo get_class($obj6); // class@anonymous/var/www/index.php0x27fe04f

for ($i=0; $i<=5; $i++) {
 echo get_class(new class() {}); // 5 x     class@anonymous/var/www/index.php0x27fe2d3
}
