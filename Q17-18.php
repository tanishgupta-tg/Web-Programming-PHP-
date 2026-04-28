<?php
// ---------------- Q17 ----------------
echo "Q17. WAP TO DEMONSTRATE SPACESHIP OPERATOR <br>";
// 1. WAP to demonstrate spaceship operator
// Comparing Integers
echo 1 <=> 1; echo "<br>";
echo 1 <=> 2; echo "<br>";
echo 2 <=> 1; echo "<br>";

echo "<br>";

// Comparing Floats
echo 1.5 <=> 1.5; echo "<br>";
echo 1.5 <=> 2.5; echo "<br>";
echo 2.5 <=> 1.5; echo "<br>";

echo "<br>";

// Comparing Strings
echo "a" <=> "a"; echo "<br>";
echo "a" <=> "b"; echo "<br>";
echo "b" <=> "a"; echo "<br>";
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q18 ----------------
echo "Q18. WAP TO DEMONSTRATE LOGICAL OPERATORS <br>";
// 2. WAP to demonstrate logical operators
$year = 2024;

if (($year % 400 == 0) || (($year % 100 != 0) && ($year % 4 == 0))) {
    echo "$year is a leap year";
} else {
    echo "$year is not a leap year";
}
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
?>
