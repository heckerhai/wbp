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
