<?php
// Create cookie
setcookie("user", "Ram", time() + 3600); // valid for 1 hour
echo "Cookie 'user' created with value: Ram<br>";

// // Modify cookie
setcookie("user", "Shyam", time() + 3600);
echo "Cookie 'user' modified to value: Shyam<br>";

// Delete cookie
setcookie("user", "", time() - 3600);
echo "Cookie 'user' deleted<br>";

// Show current cookie value
if (isset($_COOKIE['user'])) {
  echo "Current cookie value: " . $_COOKIE['user'];
} else {
  echo "Cookie 'user' is not set.";
}
?>
