<?php
// ---------------- Q32 ----------------
echo "Q32. WAP TO DEMONSTRATE FUNCTION CALL BY REFERENCE <br>";
function addFive(&$num) {
    $num += 5;
}

$num = 5;
echo $num;
echo "<br>";
addFive($num);
echo $num;

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q33 ----------------
echo "Q33. WAP TO DEMONSTRATE VARIABLE SCOPE <br>";
function test_scope() {
    global $greet;
    $greet = "Hello World";
    echo $greet;
}

test_scope();
// Now $greet is accessible globally
echo $greet; 

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>