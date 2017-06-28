<?php

ob_start('strip_away');
echo '<h1>', 'Bummer', '</h1>';
echo '<p>', 'I felt foolish and angry about it!', '</p>';
ob_end_flush();

function strip_away($buffer)
{
  $keywords = ['bummer', 'foolish', 'angry'];
  foreach ($keywords as $keyword) {
    $buffer = str_ireplace(
      $keyword,
      str_repeat('X', strlen($keyword)),
      $buffer
    );
  }
  return $buffer;
}

// Outputs:
// <h1>XXXXXX</h1><p>I felt XXXXXXX and XXXXX about it!</p>
