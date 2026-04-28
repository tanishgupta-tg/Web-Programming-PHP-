<?php
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message_input = htmlspecialchars(trim($_POST["message"]));

    // Validation
    if (empty($name) || empty($email) || empty($message_input)) {
        $message = "All fields are required!";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Invalid email format!";
    } else {

        // Prepare data to store
        $data = "Name: $name | Email: $email | Message: $message_input | Date: " . date("Y-m-d H:i:s") . "\n";

        // File handling
        $file = fopen("log.txt", "a"); // open file in append mode
        fwrite($file, $data);          // write data
        fclose($file);                 // close file

        $message = "Form submitted successfully!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Submission</title>
    <style>
        body {
            font-family: Arial;
            background-color: #f4f4f4;
        }
        .container {
            width: 350px;
            margin: 80px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px gray;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }
        button {
            padding: 10px;
            width: 100%;
            background: #28a745;
            color: white;
            border: none;
        }
        .msg {
            color: red;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Contact Form</h2>

    <div class="msg"><?php echo $message; ?></div>

    <form method="post" action="">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="text" name="email" placeholder="Enter Email" required>
        <textarea name="message" placeholder="Enter Message" required></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>