<?php

  class Glitch extends \Error
  {
  }

  try {
    throw new Glitch('Glitch!');
  }
  catch (\Exception $e) {
    echo 'Caught ' . $e->getMessage();
  }
