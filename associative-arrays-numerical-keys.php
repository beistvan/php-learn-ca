<?php
namespace Codecademy;

$hybrid_array = ["one", "two", "three", "four"];
$hybrid_array[8] = "five more";
print_r($hybrid_array);
array_push($hybrid_array, rand());
echo $hybrid_array[9];
?>
