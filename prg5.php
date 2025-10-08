<?php
$a = "150";
$b = "45.89";
$c = 200;

echo "Before Casting:<br>";
echo "a = $a => ".gettype($a)."<br>";
echo "b = $b => ".gettype($b)."<br>";
echo "c = $c => ".gettype($c)."<br><br>";

settype($a, "integer");
settype($b, "float");
settype($c, "string");

echo "After Casting with settype():<br>";
echo "a = $a => ".gettype($a)."<br>";
echo "b = $b => ".gettype($b)."<br>";
echo "c = $c => ".gettype($c)."<br><br>";

$x = "300.75";
$y = (int)$x;
$z = (float)$x;
$w = (string)$z;

echo "After Manual Casting:<br>";
echo "x = $x => ".gettype($x)."<br>";
echo "y = $y => ".gettype($y)."<br>";
echo "z = $z => ".gettype($z)."<br>";
echo "w = $w => ".gettype($w);
?>
