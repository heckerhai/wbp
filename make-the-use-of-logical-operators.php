<?php
$a = 10;
$b = 20;

if ($a < 15 && $b > 15) {
    echo "AND: Both true<br>";
}

if ($a > 15 || $b > 15) {
    echo "OR: One is true<br>";
}

if (!($a > 15)) {
    echo "NOT: Condition is false<br>";
}
?>

