<?php
namespace Codecademy;

function willWeEat($meal, $areHungry) {
  if ($areHungry || ($meal === "dessert")) {
    return "Yum. Thanks!";
  } else {
    return "No thanks. We're not hungry.";
  }
}

echo willWeEat("dessert", false);
echo "\n\n";
echo willWeEat("dinner", false);
?>
