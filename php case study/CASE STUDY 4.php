<?php
session_start();
// Initialize cart
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
// Handle form submission
if (isset($_POST['add_to_cart'])) {
    $product = htmlspecialchars($_POST['product']);
    $price = (int)$_POST['price'];
    $qty = (int)$_POST['quantity'];

    $total = $price * $qty;

    $_SESSION['cart'][] = [
        "product" => $product,
        "price" => $price,
        "quantity" => $qty,
        "total" => $total
    ];
}
// Set cookie (user preference)
if (isset($_POST['set_preference'])) {
    $color = $_POST['bgcolor'];
    setcookie("bgcolor", $color, time() + 3600); // 1 hour
}
// Clear session after order
if (isset($_POST['confirm_order'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
// Get cookie
$bgcolor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : "#ffffff";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Order Processing System</title>
    <style>
        body {
            font-family: Arial;
            background-color: <?php echo $bgcolor; ?>;
            padding: 20px;
        }
        form {
            background: #f4f4f4;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            width: 300px;
        }
        input, select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
        }
        table {
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        button {
            padding: 8px 12px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<h2>🛒 Order Form</h2>
<form method="post">
    <label>Product:</label>
    <select name="product" required>
        <option value="Ring">Ring</option>
        <option value="Necklace">Necklace</option>
        <option value="Bracelet">Bracelet</option>
    </select>
    <label>Price:</label>
    <input type="number" name="price" required>
    <label>Quantity:</label>
    <input type="number" name="quantity" required>
    <button type="submit" name="add_to_cart">Add to Cart</button>
</form>
<h3>🎨 Set Background Preference (Cookie)</h3>
<form method="post">
    <input type="color" name="bgcolor" required>
    <button type="submit" name="set_preference">Save Preference</button>
</form>
<h2>📦 Order Summary</h2>
<?php if (!empty($_SESSION['cart'])): ?>
<table>
    <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
    </tr>
    <?php 
    $grandTotal = 0;
    foreach ($_SESSION['cart'] as $item): 
        $grandTotal += $item['total'];
    ?>
    <tr>
        <td><?php echo $item['product']; ?></td>
        <td><?php echo $item['price']; ?></td>
        <td><?php echo $item['quantity']; ?></td>
        <td><?php echo $item['total']; ?></td>
    </tr>
    <?php endforeach; ?>
    <tr>
        <th colspan="3">Grand Total</th>
        <th><?php echo $grandTotal; ?></th>
    </tr>
</table>
<form method="post">
    <button type="submit" name="confirm_order">Confirm Order</button>
</form>
<?php else: ?>
<p>No items in cart.</p>
<?php endif; ?>
</body>
</html>