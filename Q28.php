<?php
$conn = new mysqli("localhost", "root", "", "test");
if ($conn->connect_error) die("Connection failed");

// Predefined data
$name = "John Doe";
$email = "john@example.com";

// Insert data
$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email')";
if ($conn->query($sql)) {
    echo "Data inserted successfully.<br>";
} else {
    echo "Insert error: " . $conn->error . "<br>";
}

$conn->close();
?>
