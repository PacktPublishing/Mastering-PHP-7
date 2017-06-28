$letters = (function () {
  yield 'A';
  yield 'B';
  return 'C';
})();

// Outputs: A B
foreach ($letters as $letter) {
  echo $letter;
}

// Outputs: C
echo $letters->getReturn();
