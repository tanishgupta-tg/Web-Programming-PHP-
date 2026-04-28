<?php
// ---------------- Q34 ----------------
echo "Q34. WAP TO DEMONSTRATE ASSOCIATIVE ARRAYS <br>";
$salaries = array("Mohan" => 2000, "Vishal" => 1000, "Rohan" => 500);

echo "Salary of Mohan is " . $salaries["Mohan"] . "<br>";
echo "Salary of Vishal is " . $salaries["Vishal"] . "<br>";
echo "Salary of Rohan is " . $salaries["Rohan"] . "<br>";

// Continuing from the next page
$salaries["Rakshit"] = "high";
$salaries["Arpit"] = "mid";
$salaries["Arnav"] = "low";

echo "Salary of Rakshit is " . $salaries["Rakshit"] . "<br>";
echo "Salary of Arpit is " . $salaries["Arpit"] . "<br>";
echo "Salary of Arnav is " . $salaries["Arnav"] . "<br>";

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q35 ----------------
echo "Q35. WAP TO DEMONSTRATE MULTIDIMENSIONAL ARRAY <br>";
$marks = array(
    "Rakshit" => array("physics" => 35, "maths" => 30, "history" => 39),
    "Tanish" => array("physics" => 30, "maths" => 32, "history" => 29),
    "Arpit" => array("physics" => 31, "maths" => 22, "history" => 34)
);

// Accessing Values
echo "Marks for Rakshit in physics : ";
echo $marks["Rakshit"]["physics"] . "<br>";

echo "Marks for Tanish in maths : ";
echo $marks["Tanish"]["maths"] . "<br>";

echo "Marks for Arpit in history : ";
echo $marks["Arpit"]["history"] . "<br>";

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
