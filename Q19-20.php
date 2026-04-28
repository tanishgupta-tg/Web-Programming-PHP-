<?php
// ---------------- Q19 ----------------
echo "Q19. WAP TO DEMONSTRATE INCREMENT & DECREMENT OPERATORS <br>";
// 1. WAP to demonstrate increment & decrement operators
$a = 10;
echo "++$a is " . (++$a) . "<br>";
echo "Now a is " . $a . "<br>";

$a = 10;
echo "$a++ is " . ($a++) . "<br>";
echo "Now a is " . $a . "<br>";

$a = 10;
echo "--$a is " . (--$a) . "<br>";
echo "Now a is " . $a . "<br>";

$a = 10;
echo "$a-- is " . ($a--) . "<br>";
echo "Now a is " . $a . "<br>";

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q20 ----------------
echo "Q20. WAP TO DEMONSTRATE CONSTANT <br>";
// 2. WAP to demonstrate constant
define("GREETING", "Hello World");

echo GREETING; 
echo "<br>";

// If you need the word "Greeting" specifically, 
// you must use the exact casing used in the define() function.
echo GREETING; 
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
