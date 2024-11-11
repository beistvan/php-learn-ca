<?php
namespace Codecademy;
$record_holders = [];

$arr_len = array_unshift($record_holders, "Tim Montgomery", "Maurice Greene", "Donovan Bailey", "Leroy Burrell","Carl Lewis"); 

$removed = array_shift($record_holders); 

$arr_len = array_unshift($record_holders, "Justin Gatlin", "Asafa Powell");

$removed = array_shift($record_holders); 

$arr_len = array_unshift($record_holders, "Usain Bolt");

print_r($record_holders);
?>
