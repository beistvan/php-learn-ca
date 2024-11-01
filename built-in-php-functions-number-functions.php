<?php
namespace Codecademy;

function calculateDistance($a, $b)
{
  return abs($a - $b);
}

function calculateTip($tip)
{
  return round($tip + $tip * 0.18);
}

echo calculateDistance(-1, 4);

echo calculateTip(100)

?>
