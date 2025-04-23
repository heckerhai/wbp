<?php

for ($i = 1; $i <= 5; $i++) {
    echo str_repeat("*", $i) . "<br>";
}

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    echo str_repeat("&nbsp;", $rows - $i);
    echo str_repeat("*", $i);
    echo "<br>";
}

$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    echo str_repeat("&nbsp;&nbsp;", $rows - $i);
    echo str_repeat("*", $i);
    echo "<br>";
}

?>
