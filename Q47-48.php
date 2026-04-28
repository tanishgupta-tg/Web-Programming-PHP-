<?php
// ---------------- Q47 ----------------
echo "Q47. WAP TO STORE & DISPLAY THE 1ST 10 FACTORS OF 4200 USING ARRAY <br>";
$num = 4200;
$factor = array();

for ($i = 1; $i <= $num; $i++) {
    if ($num % $i == 0) {
        $factor[] = $i;
    }
    if (count($factor) == 10) {
        break;
    }
}

echo "First 10 factors of 4200 are: <br>";
foreach ($factor as $value) {
    echo $value . " ";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q48 ----------------
echo "Q48. WAP TO DEMONSTRATE WHETHER THE STRING IS PALINDROME OR NOT <br>";
$str = "madam";
$reverse = strrev($str);

if ($str == $reverse) {
    echo "The string is a Palindrome";
} else {
    echo "The string is not a Palindrome";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
