<?php
class Car {
    public $brand;
    public $model;

    public function __construct($brand, $model) {
        $this->brand = $brand;
        $this->model = $model;
    }
}

// Create object
$car = new Car("Toyota", "Innova");

// Serialize the object
$serializedCar = serialize($car);

// Display the serialized string
echo "Serialized Data: $serializedCar<br>";

// Unserialize back to object
$unserializedCar = unserialize($serializedCar);

echo "Unserialized data : <br>";
// Display unserialized object data
echo "Brand: " . $unserializedCar->brand . "<br>";
echo "Model: " . $unserializedCar->model . "<br>";
?>
