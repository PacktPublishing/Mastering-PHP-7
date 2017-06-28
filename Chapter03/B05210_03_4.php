<?php

  class Flaw extends \Exception
  {
  }

  try {
    throw new Flaw('Flaw!');
  }
  catch (\Exception $e) {
    echo 'Caught ' . $e->getMessage();
  }
