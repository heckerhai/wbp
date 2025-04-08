<?php
// Anonymous function assigned to a variable
$carInfo = function($brand) {
    echo "This is a $brand car.<br>";
};

// Calling the anonymous function
$carInfo("Honda");
$carInfo("Ford");
$carInfo("Audi");
?>
