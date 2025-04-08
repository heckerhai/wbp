//SQL
CREATE TABLE employee (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  mobile VARCHAR(15),
  salary INT
);

<?php
$conn = new mysqli("localhost", "root", "", "test");
if ($conn->connect_error) die("Connection failed");

// Predefined data
$name = "Amit Kumar";
$mobile = "9876543210";
$salary = 30000;

// Insert data
$sql = "INSERT INTO employee (name, mobile, salary) VALUES ('$name', '$mobile', $salary)";
if ($conn->query($sql)) {
    echo "Employee data inserted successfully.";
} else {
    echo "Insert error: " . $conn->error;
}

$conn->close();
?>
