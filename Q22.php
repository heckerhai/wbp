
<html>
<body>

<h3>Enter Two Numbers:</h3>
<form method="post">
  Number 1: <input type="number" name="num1"><br><br>
  Number 2: <input type="number" name="num2"><br><br>
  <input type="submit" name="compare" value="Compare">
</form>

<?php
if (isset($_POST['compare'])) {
  $a = $_POST['num1'];
  $b = $_POST['num2'];

  if ($a > $b) {
    echo "Greatest number is: $a";
  } elseif ($b > $a) {
    echo "Greatest number is: $b";
  } else {
    echo "Both numbers are equal.";
  }
}
?>

</body>
</html>
