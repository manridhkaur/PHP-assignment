<?php
//adding the styles
echo "<head>
       <title>Order Confirmation </title>

       </head>
       <body>
       <h1>Order is Confirmed</h1>";
// Retrieve form data
if ($_SERVER["REQUEST_METHOD"]== "POST"){
$orderId = $_POST['orderId'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$size = isset($_POST["size"]) ? implode(', ', $_POST['size']) : "";
$toppings = isset($_POST["toppings"]) ? implode(', ', $_POST['toppings']) : "";
$delivery_Address = $_POST['delivery_address'];

// Database connection
$host = '172.31.22.43';
$username = "Manridh200538493";
$password = "LLeiKZf4wD";
$dbname = "Manridh200538493";
$dsn = "mysql:host=$host;dbname=$dbname";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute SQL statement
$stmt = $conn->prepare("INSERT INTO orders (orderId ,name, address, email, size, toppings, delivery_address) VALUES ('$orderId','$name', '$address', '$email','$size','$toppings', '$delivery_address')");
$stmt->execute([$orderId, $name, $address, $email, $size, $toppings, $delivery_Address]);

if ($stmt->execute()) {
    echo "Order placed successfully!";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();

// Display the stored content
echo "<h2>Order Details:</h2>";
echo "<p>OrderId: $orderId</p>";
echo "<p>name: $name</p>";
echo "<p>Address: $address</p>";
echo "<p>Email: $email</p>";
echo "<p>size: $size</p>";
echo "<p>Toppings: $toppings</p>";
echo "<p>Delivery address: $delivery_address</p>";
}
