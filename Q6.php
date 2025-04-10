<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    // First triangle (right aligned, no space between stars)
    for ($j = 0; $j < $rows - $i; $j++) {
        echo " ";
    }
    for ($k = 0; $k < $i; $k++) {
        echo "*";
    }

    // Space between first and second triangle
    echo "     ";

    // Second triangle (right aligned, stars with space)
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }

    // Space between second and third triangle
    echo "    ";

    // Third triangle (no space, same as first one)
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo " ";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*";
    }

    echo "\n";
}
?>
