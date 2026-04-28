<?php
// ---------------- Q51 ----------------
echo "Q51. WAP TO DEMONSTRATE READING OF DATA FROM FILE USING FGETS() <br>";

$filename = "example.txt";
$file = fopen($filename, "r");

if ($file) {
    echo "Reading file using fgets() : <br><br>";
    while (!feof($file)) {
        $line = fgets($file);
        echo $line . "<br>";
    }
    fclose($file);
} else {
    echo "Unable to open file";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
