Observable::fromIterator(xrange(1, 10, 1))
 ->map(function ($item) {
   return $item * 2;
 })
// ->filter(function ($item) {
  // return $item % 3 == 0;
// })
// ->reduce(function ($x, $y) {
  // return $x + $y;
// })
 ->subscribe($observer);
