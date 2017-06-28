    <?php

    try {
      $now = eval("return date(D, d M Y H:i:s);");
      echo $now;
    }
    catch (ParseError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
