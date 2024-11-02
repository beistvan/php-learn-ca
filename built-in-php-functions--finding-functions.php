<?php
namespace Codecademy;

function convertToShout($str)
{
  return strtoupper($str) . "!";
}

function tipGenerously($cost)
{
  return ceil($cost * 1.2);
}

function calculateCircleArea($diameter)
{
  return pi() * ($diameter/2)**2;
}

echo convertToShout("woah there, buddy");

echo "\n";

echo tipGenerously(100);

echo "\n";

echo calculateCircleArea(100);

?>
