// ...

$mailer
 ->filter(function ($val) {
   return strstr($val, 'Marc') == false;
 })
 ->subscribe($logger);

$users->subscribe($mailer);
