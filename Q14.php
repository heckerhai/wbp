<?php
class Car {
    public $brand;
    public $model;

    // Parameterized constructor
    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }

    public function display() {
        echo "Car Brand: $this->brand, Model: $this->model<br>";
    }
}

// Creating objects with parameters
$car1 = new Car("Toyota", "Camry");
$car2 = new Car("Honda", "Civic");

// Displaying details
$car1->display();
$car2->display();
?>
