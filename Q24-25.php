<?php
// ---------------- Q24 ----------------
echo "Q24. WAP TO DEMONSTRATE SWITCH STATEMENT <br>";
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q25 ----------------
echo "Q25. WAP TO DEMONSTRATE INCOME TAX ACCORDING TO FOLLOWING SLABS <br>";
/*
a) If gross income is less than 500,000 -> tax = 0
b) If gross income is between 500,000 - 1,000,000 -> tax = 10%
c) If gross income is between 1,000,000 - 1,500,000 -> tax = 15%
d) If gross income is between 1,500,000 - 2,000,000 -> tax = 20%
e) If gross income is more than 2,000,000 -> tax = 25%
[NOTE: use switch case]
*/

$income = 700000;
$tax = 0;

// To use a switch for ranges, we switch on 'true'
switch (true) {
    case ($income < 500000):
        $tax = 0;
        break;
    case ($income >= 500000 && $income < 1000000):
        $tax = $income * 0.10;
        break;
    case ($income >= 1000000 && $income < 1500000):
        $tax = $income * 0.15;
        break;
    case ($income >= 1500000 && $income < 2000000):
        $tax = $income * 0.20;
        break;
    case ($income >= 2000000):
        $tax = $income * 0.25;
        break;
}

echo "For an income of $income, the tax is: $tax <br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
