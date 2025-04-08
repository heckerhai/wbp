<!DOCTYPE html>
<html>
<head>
  <title>Highest Number</title>
</head>
<body>

<form method="post">
  Enter first number: <input type="number" name="num1"><br><br>
  Enter second number: <input type="number" name="num2"><br><br>
  Enter third number: <input type="number" name="num3"><br><br>
  <input type="submit" name="submit" value="Find Highest">
</form>

  
<?php
if (isset($_POST['submit'])) {
  $a = $_POST['num1'];
  $b = $_POST['num2'];
  $c = $_POST['num3'];

  if ($a >= $b && $a >= $c) {
    echo "The highest number is: $a";
  } elseif ($b >= $a && $b >= $c) {
    echo "The highest number is: $b";
  } else {
    echo "The highest number is: $c";
  }
}
?>

</body>
</html>

