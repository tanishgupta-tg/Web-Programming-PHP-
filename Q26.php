<?php
// ---------------- Q26 ----------------
echo "Q26. WAP TO DEMONSTRATE FOR LOOP <br>";
echo "This year <br>";

for ($i = 0; $i < 5; $i++) {
    echo $i . "<br>";
}

echo "<br> Another way <br>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 6) {
        break;
    }
    echo $i . "<br>";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>