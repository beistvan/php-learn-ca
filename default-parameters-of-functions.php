<?php

function calculateTip($total, $tip = 20)
{
  return $total + $total * $tip /  100;
}

echo calculateTip(100);
echo calculateTip(100, 25);
?>