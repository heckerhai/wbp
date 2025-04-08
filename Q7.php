<?php
echo "<h1>While Loop</h1>";
echo "Even numbers using while loop:\n";
$count = 0;
$num = 2;

while ($count < 30) {
    echo $num . " ";
    $num += 2;
    $count++;
}
echo "\n\n";

echo "<h1>do...while Loop</h1>";
echo "Even numbers using do...while loop:\n";
$count = 0;
$num = 2;

do {
    echo $num . " ";
    $num += 2;
    $count++;
} while ($count < 30);
echo "\n\n";
?>



