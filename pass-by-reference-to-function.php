<?php

$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";


function convertToQuestion(&$str) 
{
  $str = "Do you think " . $str . "?\n";
}

convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);
 
echo $string_one;
echo $string_two;
echo $string_three;
?>
