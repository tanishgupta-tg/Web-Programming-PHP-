<?php
// ---------------- Q13 ----------------
echo "Q13. WAP TO DEMONSTRATE COMPARISON OPERATORS <br>";

// 1. WAP to demonstrate comparison operators
$x = 25;
$y = 35;
$z = "25";

var_dump($x == $z);   // Equal
var_dump($x === $z);  // Identical
var_dump($x != $y);   // Not equal
var_dump($x <> $y);   // Not equal
var_dump($x !== $z);  // Not identical
var_dump($x < $y);    // Less than
var_dump($x > $y);    // Greater than
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
// ---------------- Q14 ----------------
echo "Q14. WAP TO DEMONSTRATE STRING OPERATORS <br>";

// 2. WAP to demonstrate string operators
$x = "Hello ";
$y = "World";

echo $x . $y;         // Concatenation
echo "<br>";

$x .= $y;             // Concatenation assignment
echo $x;
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
?>