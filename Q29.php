//sql for DATABASE
-- Create database
CREATE DATABASE IF NOT EXISTS test;
USE test;

-- Create table
CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100)
);

-- Insert sample data
INSERT INTO students (name, email) VALUES
('Alice Smith', 'alice@example.com'),
('Bob Johnson', 'bob@example.com');


<?php
$conn = new mysqli("localhost", "root", "", "test");
if ($conn->connect_error) die("Connection failed");

$name="pratham";
$email="pratham@gmail.com";
// Update data where id = 1
$update_sql = "UPDATE students SET name = '$name', email = '$email' WHERE id = 1";
if ($conn->query($update_sql)) {
    echo "Record updated successfully.<br><br>";
} else {
    echo "Update error: " . $conn->error . "<br>";
}
// Display all data
$result = $conn->query("SELECT * FROM students");
if ($result->num_rows > 0) {
    echo "All Student Records:<br><br>";
    while ($row = $result->fetch_assoc()) {
        echo "ID: {$row['id']}<br>";
        echo "Name: {$row['name']}<br>";
        echo "Email: {$row['email']}<br><br>";
    }
} else {
    echo "No records found.<br>";
}

$conn->close();
?>
