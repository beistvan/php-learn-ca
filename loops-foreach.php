<?php
$scores = [
  "Alice" => 99,
  "Bob" => 95,
  "Charlie" => 98,
  "Destiny" => 91,
  "Edward" => 88
];

foreach ($scores as $detail) {
  echo "Someone received a score of " . $detail . ".\n";
}

foreach ($scores as $attribute => $detail) {
  echo $attribute . " received a score of " . $detail . ".\n";
}
?>
