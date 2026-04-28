<?php
// ---------------- Q42 ----------------
echo "Q42. WAP TO DEMONSTRATE KRSORT() FUNCTION IN ARRAY <br>";
$age = array("Peter" => 20, "Harry" => 14, "John" => 45, "Clark" => 35);
krsort($age);
print_r($age);

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";

// ---------------- Q43 ----------------
echo "Q43. WAP TO DEMONSTRATE CLASS AND OBJECT <br>";
class Rectangle {
    public $length = 10;
    public $width = 5;

    public function getPerimeter() {
        return (2 * ($this->length + $this->width));
    }

    public function getArea() {
        return ($this->length * $this->width);
    }

    public function showDetails() {
        echo "length of rectangle : " . $this->length . "<br>";
        echo "width of rectangle : " . $this->width . "<br>";
        echo "Perimeter of rectangle : " . $this->getPerimeter() . "<br>";
        echo "Area of rectangle : " . $this->getArea() . "<br>";
    }
}

$rec = new Rectangle();
$rec->showDetails();

echo "<br><br>";
echo "This program is written and execute by Tanish Gupta <br><br>";
echo "<br><br>";
?>
