<?php
// ---------------- Q52 ----------------
echo "Q52. WAP TO DEMONSTRATE WRITING DATA INTO A FILE <br>";

$filename = "example.txt";
$file = fopen($filename, "w");

if ($file) {
    $data = "HelloWorld !! welcome to php file";
    fwrite($file, $data);
    echo "Data written successfully!";
    fclose($file);
} else {
    echo "unable to open file";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q53 ----------------
echo "Q53. WAP TO SET AND ACCESS COOKIES <br>";

// Setting a cookie for 1 hour
setcookie("username", "Rakshit", time() + 3600);

if (isset($_COOKIE["username"])) {
    echo "Cookie value: " . $_COOKIE["username"];
} else {
    echo "Cookie is not set!";
}

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
