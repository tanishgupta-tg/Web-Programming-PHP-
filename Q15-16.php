<?php
// ---------------- Q15 ----------------
echo "Q15. WAP TO DEMONSTRATE ARRAY OPERATORS <br>";
// 1. WAP to demonstrate array operators
$x = array("a" => "Red", "b" => "blue", "c" => "Green");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
$z = $x + $y; // Union of $x and $y

var_dump($z);
var_dump($x == $y);   // Equality
var_dump($x === $y);  // Identity
var_dump($x != $y);   // Inequality
var_dump($x <> $y);   // Inequality
var_dump($x !== $y);  // Non-identity
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q16 ----------------
echo "Q16. WAP TO DEMONSTRATE BITWISE OPERATORS <br>";
// 2. WAP to demonstrate bitwise operators
$a = 5;
$b = 3;

$and = $a & $b;
$or  = $a | $b;
$notA = ~$a;

echo "Value of a: $a <br>";
echo "Value of b: $b <br>";
echo "Bitwise AND: $and <br>";
echo "Bitwise OR: $or <br>";
echo "Bitwise NOT: $notA <br>";
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
?>
