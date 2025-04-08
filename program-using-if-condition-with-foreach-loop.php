<?php

$numbers = [10, 15, 22, 33, 40, 55];

echo "Even numbers in the array:<br>";

foreach ($numbers as $num) {
  if ($num % 2 == 0) {
    echo "$num<br>";
  }
}
?>
