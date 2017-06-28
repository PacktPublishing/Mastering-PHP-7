// #1
if (isset($_GET['name']) && !empty($_GET['name']))
   {
   $name = $_GET['name'];
   }
else {
     $name = 'N/A';
     }

// #2
if (!empty($_GET['name']))
   {
   $name = $_GET['name'];
   }
else {
 $name = 'N/A';
     }

// #3
$name = ((isset($_GET['name']) && !empty($_GET['name']))) ? $_GET['name'] : 'N/A';

// #4
$name = (!empty($_GET['name'])) ? $_GET['name'] : 'N/A';
