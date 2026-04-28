<?php
$file = "orders.txt";
$message = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $product = htmlspecialchars($_POST['product']);
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Calculate total
    $total = $price * $quantity;

    // Save data
    $data = $name . "," . $email . "," . $product . "," . $price . "," . $quantity . "," . $total . "," . date("Y-m-d H:i:s") . "\n";

    if (file_put_contents($file, $data, FILE_APPEND)) {
        $message = "Order saved successfully!";
    } else {
        $message = "Error saving order!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Processing System</title>

    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .container {
            width: 80%;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        form {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin: 5px 0 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"] {
            background: #28a745;
            color: white;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th {
            background: #007bff;
            color: white;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        tr:nth-child(even) {
            background: #f2f2f2;
        }

        .message {
            text-align: center;
            color: green;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

<h2>🛒 Order Form</h2>

<p class="message"><?php echo $message; ?></p>

<form method="POST">
    Name:
    <input type="text" name="name" required>
    
    Email:
    <input type="email" name="email" required>
    
    Product:
    <input type="text" name="product" required>
    
    Price:
    <input type="number" name="price" required>
    
    Quantity:
    <input type="number" name="quantity" required>
    
    <input type="submit" value="Place Order">
</form>

<hr>

<h2>📋 Admin Panel</h2>

<table>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Product</th>
    <th>Price</th>
    <th>Quantity</th>
    <th>Total</th>
    <th>Date</th>
</tr>

<?php
if (file_exists($file)) {
    $orders = file($file);

    foreach ($orders as $order) {
        $data = explode(",", trim($order));

        echo "<tr>
            <td>{$data[0]}</td>
            <td>{$data[1]}</td>
            <td>{$data[2]}</td>
            <td>{$data[3]}</td>
            <td>{$data[4]}</td>
            <td>{$data[5]}</td>
            <td>{$data[6]}</td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No orders found</td></tr>";
}
?>

</table>

</div>

</body>
</html>