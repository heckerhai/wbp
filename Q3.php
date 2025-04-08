<?php
// Initialized value
$num = -15;

// Check if positive, negative or zero
if ($num > 0) {
    echo "The number is Positive";
} elseif ($num < 0) {
    echo "The number is Negative";
} else {
    echo "The number is Zero";
}
?>


//⚠️Incase user input is required
<!DOCTYPE html>
<html>
<head>
  <title>Check Positive or Negative</title>
</head>
<body>

<form method="post">
  Enter a number: <input type="number" name="num"><br><br>
  <input type="submit" name="check" value="Check">
</form>

<?php
if (isset($_POST['check'])) {
  $num = $_POST['num'];

  if ($num > 0) {
    echo "The number is Positive ";
  } elseif ($num < 0) {
    echo "The number is Negative";
  } else {
    echo "The number is Zero";
  }
}
?>

</body>
</html>
