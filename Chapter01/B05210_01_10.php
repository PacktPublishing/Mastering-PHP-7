function even() {
   for ($i = 1; $i <= 10; $i++) {
     if ($i % 2 == 0) {
        yield $i;
     }
   }
}

function odd() {
    for ($i = 1; $i <= 10; $i++) {
       if ($i % 2 != 0) {
          yield $i;
       }
    }
}

function mix() {
   yield -1;
   yield from odd();
   yield 17;
   yield from even();
   yield 33;
}

// 2 4 6 8 1 0
foreach (even() as $even) {
  echo $even;
}

// 1 3 5 7 9
foreach (odd() as $odd) {
  echo $odd;
}

// -1 1 3 5 7 9 17 2 4 6 8 10 33
foreach (mix() as $mix) {
  echo $mix;
}
