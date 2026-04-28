<?php
// ---------------- Q44 ----------------
echo "Q44. WAP TO DEMONSTRATE RECURSIVE FUNCTION <br>";

function selfMultiply(&$number) {
    $number = $number * $number;
    return $number;
}

$mynum = 5;
echo $mynum . "<br>";
selfMultiply($mynum);
echo $mynum;

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>