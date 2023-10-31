<?php
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind statement
$stmt = $conn->prepare("INSERT INTO contact_form (name, lastname, email, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $lastname, $email, $message);

// Set parameters and execute
$name = $_POST["name"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];
$stmt->execute();

echo "New record created successfully";

// Close statement and connection
$stmt->close();
$conn->close();
?>