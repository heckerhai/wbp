<?php
class Student {
    public $name = "Ravi";
    public $roll = 101;

    public function display() {
        echo "Name: $this->name, Roll No: $this->roll<br>";
    }

    public function greet() {
        echo "Hello Student!<br>";
    }
}

$stud = new Student();

echo "Class: " . get_class($stud) . "<br>";

echo "Methods:<br>";
foreach (get_class_methods($stud) as $m) {
    echo "-"."$m<br>";
}

echo "Properties:<br>";
foreach (get_object_vars($stud) as $k => $v) {
    echo "-"."$k: $v<br>";
}

echo "greet() exists? " . (method_exists($stud, 'greet') ? "Yes" : "No");
?>
