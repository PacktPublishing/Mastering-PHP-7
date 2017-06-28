    <?php

    try {
      $now = date(D, d M Y H:i:s);
      echo $now;
    }
    catch (ParseError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
