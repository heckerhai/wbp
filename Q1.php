<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Enter a first number : <input type="number" name="a" required><br><br>
        Enter a second number : <input type="number" name="b" required><br><br>
        Enter a third number : <input type="number" name="c" required><br><br>
        <input type="submit" value="Check Greatest">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        if ($a >= $b && $a >= $c) {
            echo $a . ' is greatest';
        } elseif ($b >= $a && $b >= $c) {
            echo $b . ' is greatest';
        } else {
            echo $c . ' is greatest';
        }
    }
    ?>
</body>
</html>

___________________________________________________________________________________________________________________________


<?php
// Already initialized values
$a = 20;
$b = 35;
$c = 15;

// Find highest number
if ($a >= $b && $a >= $c) {
    echo "The highest number is: $a";
} elseif ($b >= $a && $b >= $c) {
    echo "The highest number is: $b";
} else {
    echo "The highest number is: $c";
}
?>
