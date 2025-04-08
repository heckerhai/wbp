<html>
<body>

<h2>User Info (GET Method)</h2>

<form method="get">
    Name: <input type="text" name="name"><br><br>
    City: <input type="text" name="city"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if (isset($_GET['name']) && isset($_GET['city'])) {
    echo "<h3>Received Data:</h3>";
    echo "Name: " . $_GET['name'] . "<br>";
    echo "City: " . $_GET['city'] . "<br>";
}
?>

</body>
</html>
