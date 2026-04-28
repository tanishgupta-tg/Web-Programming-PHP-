<?php
// ---------------- Q49 ----------------
echo "Q49. WAP TO PRINT DATE AND TIME OF YOUR CURRENT CITY AND DATE & TIME OF BERLIN. ALSO CALCULATE THE DIFFERENCE OF DATE & TIME <br>";

date_default_timezone_set("Asia/Kolkata");
$india_time = date("Y-m-d H:i:s");

$india = new DateTime("now", new DateTimeZone("Asia/Kolkata"));
$berlin = new DateTime("now", new DateTimeZone("Europe/Berlin"));

$berlin_time = $berlin->format("Y-m-d H:i:s");

$diff = $india->diff($berlin);

echo "Current Date & Time in India: " . $india_time . "<br>";
echo "Current Date & Time in Berlin: " . $berlin_time . "<br>";
echo "Difference: ";
echo $diff->format("%h hours %i minutes %s seconds");

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q50 ----------------
echo "Q50. WAP TO OPEN A FILE <br>";

$filename = "example.txt";
$file = fopen($filename, "r");

if ($file) {
    echo "File opened successfully! <br>";
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);
} else {
    echo "Error opening file";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
