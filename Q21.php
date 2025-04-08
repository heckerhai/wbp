<?php
session_start(); 

// Set session values
$_SESSION["username"] = "Abc";  
$_SESSION["role"] = "Admin"; 

echo "Session started and values set.<br>";
echo "Username: " . $_SESSION["username"] . "<br>";
echo "Role: " . $_SESSION["role"] . "<br>";

// Modify session variable
$_SESSION["username"] = "Xyz"; 
echo "Updated Username: " . $_SESSION["username"] . "<br>";

// Remove a session variable
unset($_SESSION["username"]); 
echo "Username session variable removed.<br>";

// Display remaining session value
if (isset($_SESSION["role"])) {
    echo "Remaining Role: " . $_SESSION["role"];
} else {
    echo "No session data left.";
}
?>

