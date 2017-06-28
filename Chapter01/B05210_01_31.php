 function export(): iterable {
   return [
     'Johny',
     'Tom',
     'Matt'
   ];
 }

 function mix(): iterable {
   return [
     'Welcome',
      33,
      4200.00
   ];
 }

 function numbers(): iterable {
    for ($i = 0; $i <= 5; $i++) {
       yield $i;
    }
 }
