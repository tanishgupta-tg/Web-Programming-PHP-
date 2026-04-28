<?php

// ---------------- Q10 ----------------
echo "Q10. WAP TO DEMONSTRATE RESOURCE TYPE <br>";

// Open this script file to demonstrate a resource

$filename = "test.txt";

// Check if file exists; if not, create it so fopen doesn't fail
if (!file_exists($filename)) {
    file_put_contents($filename, "Hello World");
}

$file = fopen($filename, "r");
var_dump($file);

// Good practice: close the resource when done
fclose($file);


echo "This program is written and execute by Tanish Gupta <br><br>";

// ---------------- Q11 ----------------
echo "Q11. WAP TO DEMONSTRATE ARITHMETIC OPERATORS <br>";

// Declare variables
$a = 10;
$b = 5;

// Perform arithmetic operations
echo "Addition: " . ($a + $b) . "<br>";       // +
echo "Subtraction: " . ($a - $b) . "<br>";    // -
echo "Multiplication: " . ($a * $b) . "<br>"; // *
echo "Division: " . ($a / $b) . "<br>";       // /
echo "This program is written and execute by Tanish Gupta <br><br>";

// ---------------- Q12 ----------------
echo "Q12. WAP TO DEMONSTRATE ASSIGNMENT OPERATORS <br>";

$x = 10;
echo "$x <br>";

$x = 20;
$x += 30; 
echo "$x <br>";

$m = 50;
$m -= 20;
echo "$m <br>";

$a = 50;
$a *= 10;
echo "$a <br>";

$n = 500;
$n /= 15;
echo "$n <br>";

echo "This program is written and execute by Tanish Gupta <br><br>";

?>