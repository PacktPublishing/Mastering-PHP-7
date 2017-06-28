function goodbye(?string $name = null)
 {
   if (is_null($name))
     {
       echo 'Goodbye!';
     }
   else
     {
       echo "Goodbye $name!";
     }
 }

goodbye(); // valid
goodbye(null); // valid
goodbye('John'); // valid
