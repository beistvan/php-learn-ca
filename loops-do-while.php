<?php
  $plant_height = 220;
  do {
    echo "The plant is " . $plant_height . " tall.\n";
    if ($plant_height >= 30){
      echo "And can produce fruit.\n";
    }
    $plant_height++;
  } while ($plant_height <= 30);
?>
