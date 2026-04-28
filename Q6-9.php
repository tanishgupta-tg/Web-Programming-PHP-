<?php

// ---------------- Q6 ----------------
echo "Q6. WAP TO DEMONSTRATE BOOLEAN DATATYPE <br>";

// Boolean variable
$bool = true;

// Display datatype and value
var_dump($bool);
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";

// ---------------- Q7 ----------------
echo "Q7. WAP TO DEMONSTRATE ARRAY DATATYPE <br>";

// Create array
$arr = array(1, 2, 3);

// Display array
print_r($arr);
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";

// ---------------- Q8 ----------------
echo "Q8. WAP TO DEMONSTRATE NULL DATATYPE <br>";

// NULL variable
$nullVar = NULL;

// Display datatype
var_dump($nullVar);
echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";

// ---------------- Q9 ----------------
echo "Q9. WAP TO DEMONSTRATE OBJECT DATATYPE <br>";

// Create a class
class Test {
    function show() {
        echo "Object Example";
    }
}

// Create object
$obj = new Test();

// Call method
$obj->show();
echo "This program is written and execute by Tanish Gupta <br><br>";

?>