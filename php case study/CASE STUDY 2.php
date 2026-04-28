<?php
// ================= CONFIGURATION (ARRAY) =================
$config = [
    "site_name" => "My PHP Utility Library",
    "version" => "1.0",
    "author" => "Student"
];

// ================= REUSABLE FUNCTIONS =================
function sanitize($data) {
    return htmlspecialchars(trim($data));
}

function formatCurrency($amount) {
    return "₹" . number_format($amount, 2);
}

function getCurrentDate() {
    return date("d-m-Y H:i:s");
}

// ================= UTILITY CLASS (OOP) =================
class Calculator {

    public function add($a, $b) {
        return $a + $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function calculateTotal($price, $qty) {
        return $price * $qty;
    }
}

// ================= DATA HANDLING USING ARRAY =================
$history = [];

$result = "";
$total = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = sanitize($_POST["num1"]);
    $num2 = sanitize($_POST["num2"]);
    $price = sanitize($_POST["price"]);
    $qty = sanitize($_POST["qty"]);

    $calc = new Calculator();

    $result = $calc->add($num1, $num2);
    $total = $calc->calculateTotal($price, $qty);

    // Store in array (simulating reusable data storage)
    $history[] = [
        "addition" => $result,
        "total" => $total,
        "time" => getCurrentDate()
    ];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $config['site_name']; ?></title>

    <style>
        body {
            font-family: Arial;
            background: #f4f4f4;
            text-align: center;
        }
        .container {
            width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        input {
            padding: 8px;
            margin: 5px;
            width: 90%;
        }
        button {
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }
        .result {
            margin-top: 15px;
            background: #e9ecef;
            padding: 10px;
        }
    </style>
</head>

<body>

<div class="container">
    <h2><?php echo $config['site_name']; ?></h2>

    <form method="post">
        <h3>Addition</h3>
        <input type="number" name="num1" placeholder="Enter number 1" required>
        <input type="number" name="num2" placeholder="Enter number 2" required>

        <h3>Total Calculation</h3>
        <input type="number" name="price" placeholder="Price" required>
        <input type="number" name="qty" placeholder="Quantity" required>

        <button type="submit">Calculate</button>
    </form>

    <?php if($result !== "") { ?>
        <div class="result">
            <p><b>Addition Result:</b> <?php echo $result; ?></p>
            <p><b>Total Amount:</b> <?php echo formatCurrency($total); ?></p>
            <p><b>Date & Time:</b> <?php echo getCurrentDate(); ?></p>
        </div>
    <?php } ?>
</div>

</body>
</html>