"""⚠️create different files to this questionm ,1 for sending data ,2 for displaying the send data 
⚠️both program php file should be in same folder """

//form.php
<html>
<body>
<h2>Customer Details Form</h2>
<form method="post" action="display.php">
  Customer Name: <input type="text" name="name" required><br><br>
  Address: <textarea name="address" required></textarea><br><br>
  Mobile No: <input type="tel" name="mobile" required><br><br>
  Item Purchased: 
  <select name="item">
    <option value="Laptop">Laptop</option>
    <option value="Mobile">Mobile</option>
    <option value="TV">TV</option>
    <option value="Tablet">Tablet</option>
  </select><br><br>
  Amount: <input type="number" name="amount" required><br><br>

  <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>

//display.php
