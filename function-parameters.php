<?php

function increaseEnthusiasm($str) 
{
  return $str . "!";
}

echo increaseEnthusiasm("Hello");

function repeatThreeTimes($str) 
{
  return $str . $str. $str;
}

echo repeatThreeTimes("Hali");

echo increaseEnthusiasm(repeatThreeTimes("Hey"));
?>
