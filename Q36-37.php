<?php
// ---------------- Q36 ----------------
echo "Q36. WAP TO DEMONSTRATE NUMERIC ARRAY <br>";

// 1st Method
$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $value) {
    echo "Value is $value <br>";
}

echo "<br>";

// 2nd Method
$num[0] = "one";
$num[1] = "two";
$num[2] = "three";
$num[3] = "four";

foreach ($num as $value) {
    echo "Value is $value <br>";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q37 ----------------
echo "Q37. WAP TO DEMONSTRATE SORT() FUNCTION IN ARRAY <br>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
