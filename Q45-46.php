<?php
// ---------------- Q45 ----------------
echo "Q45. WAP TO DEMONSTRATE STRING AND ITS FUNCTIONS <br>";

// Define a string
$str = "hello world";

// strlen() -> returns length of string
echo strlen($str);
echo "<br>";

// str_word_count() -> counts number of words
echo str_word_count($str);
echo "<br>";

// str_replace() -> replaces word in string
echo str_replace("world", "PHP", $str);
echo "<br>";

// strrev() -> reverses string
echo strrev($str);
echo "<br>";


$str = "hello world";

// strtolower() -> converts string to lower case
echo strtolower($str);
echo "<br>";

// strtoupper() -> converts string to upper case
echo strtoupper($str);
echo "<br>";

// ucfirst() -> capitalize first letter of string
echo ucfirst($str);
echo "<br>";

// ucwords() -> capitalize first letter of each word
echo ucwords($str);
echo "<br>";

// strpos() -> finds position of first occurrence of word
echo strpos($str, "world");
echo "<br>";

// substr() -> extracts part of string
echo substr($str, 0, 5);

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q46 ----------------
echo "Q46. WAP TO STORE & DISPLAY THE RESULT OF TOP 5 STUDENTS USING ASSOCIATIVE ARRAY <br>";

$student = [
    "Rahul" => 85,
    "Amit" => 90,
    "Neha" => 88,
    "Priya" => 92,
    "Karan" => 80
];

echo "Top 5 students Result <br>";

foreach ($student as $name => $marks) {
    echo "Name : " . $name . ", Marks : " . $marks . "<br>";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
