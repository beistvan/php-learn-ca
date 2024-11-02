<?php

$initial = '555';
//1.
$a = octdec($initial);
echo $a."\n";
//2.
$b = deg2rad($a);
echo $b."\n";
//3.
$c = cos($b);
echo $c."\n";
//4.
$d = round($c, 3);
echo $d."\n";
//5.
$e = log($d);
echo $e."\n";
//6.
$f = abs($e);
echo $f."\n";
//7.
$g = acos($f);
echo $g."\n";
//8.
$h = rad2deg($g);
echo $h."\n";
//9.
$i = floor($h);
echo $i."\n";
//10.
$j = $i - 47;
echo $j."\n";

?>
