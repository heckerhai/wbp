
<html>

<body>

<h2>PHP Calculator</h2>

<form method="post">
  Number 1: <input type="number" name="num1" step="any" required><br><br>
  Number 2: <input type="number" name="num2" step="any" required><br><br>
  Operator:
  <select name="operator">
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="*">*</option>
    <option value="/">/</option>
    <option value="%">%</option>
  </select><br><br>

  <input type="submit" name="calculate" value="Calculate">
</form>

<?php
if (isset($_POST['calculate'])) {
  $a = $_POST['num1'];
  $b = $_POST['num2'];
  $op = $_POST['operator'];
  $result = "";

  switch ($op) {
    case '+': $result = $a + $b; break;
    case '-': $result = $a - $b; break;
    case '*': $result = $a * $b; break;
    case '/': 
      $result = ($b != 0) ? $a / $b : "Cannot divide by zero";
      break;
    case '%': 
      $result = ($b != 0) ? $a % $b : "Cannot divide by zero";
      break;
    default: $result = "Invalid operator";
  }

  echo "<h3>Result: $a $op $b = $result</h3>";
}
?>

</body>
</html>
