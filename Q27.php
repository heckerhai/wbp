//SQL
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100)
);

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

// Fetch all data
$result = $conn->query("SELECT * FROM users");
if ($result->num_rows > 0) {
    echo "<br>All Users:<br>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']}<br>";
        echo "Name: {$row['name']}<br>";
        echo "Email: {$row['email']}<br><br>";
    }
} else {
    echo "No data found.<br>";
}

$conn->close();
?>
