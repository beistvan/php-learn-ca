<?php
namespace Codecademy;

$change_me = [3, 6, 9];

$change_me[3] = "string";

$change_me[4] = 5;

$change_me[1] = "tadpole";

print_r($change_me);
 
echo implode(", ", $change_me);
?>
