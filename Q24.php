
<html>
<body>

<h2>Employee Details Form</h2>

<form method="post">
  Name: <input type="text" name="name" required><br><br>
  Address: <textarea name="address" required></textarea><br><br>
  Mobile No: <input type="tel" name="mobile" required><br><br>
  Date of Birth: <input type="date" name="dob" required><br><br>
  Post: 
  <select name="post">
    <option value="Manager">Manager</option>
    <option value="Developer">Developer</option>
    <option value="Designer">Designer</option>
    <option value="HR">HR</option>
  </select><br><br>
  Salary: <input type="number" name="salary" required><br><br>

  <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
  echo "<h3>Entered Employee Details:</h3>";
  echo "Name: " . $_POST['name'] . "<br>";
  echo "Address: " . $_POST['address'] . "<br>";
  echo "Mobile No: " . $_POST['mobile'] . "<br>";
  echo "Date of Birth: " . $_POST['dob'] . "<br>";
  echo "Post: " . $_POST['post'] . "<br>";
  echo "Salary: ₹" . $_POST['salary'];
}
?>

</body>
</html>
