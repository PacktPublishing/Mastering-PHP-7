 ->reduce(function ($x, $y) {
   $z = $x + $y;
   echo '$x: ', $x, PHP_EOL;
   echo '$y: ', $y, PHP_EOL;
   echo '$z: ', $z, PHP_EOL, PHP_EOL;
   return $z;
 })
