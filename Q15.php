⚠️Write any one of the program(frist is preferable)

<?php
class Car {
    public $brand;

    // Default constructor (no parameters)
    public function __construct() {
        $this->brand = "Default Brand";
    }

    public function display() {
        echo "Car Brand: $this->brand<br>";
    }
}

// Creating object
$car1 = new Car();
$car1->display();
?>

//More Simple program
<?php
class Message {
    // Default constructor
    public function __construct() {
        echo "Welcome to PHP Programming!<br>";
    }
}

// Creating object
$msg = new Message();
?>
