 
<html>
<body>

<h2>Student Form</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    
    Age: <input type="number" name="age"><br><br>
    
    Gender:
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female<br><br>
    
    Subjects:
    <input type="checkbox" name="subjects[]" value="Math"> Math
    <input type="checkbox" name="subjects[]" value="Science"> Science
    <input type="checkbox" name="subjects[]" value="English"> English<br><br>
    
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    echo "<h3>Form Data:</h3>";
    echo "Name: " . $_POST['name'] . "<br>";
    echo "Age: " . $_POST['age'] . "<br>";
    echo "Gender: " . $_POST['gender'] . "<br>";

    if (!empty($_POST['subjects'])) {
        echo "Subjects: " . implode(", ", $_POST['subjects']) . "<br>";
    } else {
        echo "No subjects selected.<br>";
    }
}
?>

</body>
</html>
