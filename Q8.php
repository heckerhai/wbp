<?php
// Associative array: student => marks
$students = [
    "Alice" => 85,
    "Bob" => 78,
    "Charlie" => 92,
    "Diana" => 88
];

// Display student marks
foreach ($students as $name => $marks) {
    echo "$name scored $marks marks.<br>";
}
?>
