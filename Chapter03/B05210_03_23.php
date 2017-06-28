    <?php

    try {
      assert('developer' === 'programmer');
    }
    catch (AssertionError $e) {
      echo 'Caught: ' . $e->getMessage();
    }
