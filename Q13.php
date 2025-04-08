//⚠️ Write any one of the following inheritance program

//Single Inheritance
<?php
// Base class
class Animal {
    public function sound() {
        echo "Animals make sounds.<br>";
    }
}

// Derived class
class Dog extends Animal {
    public function bark() {
        echo "Dog barks: Woof Woof!<br>";
    }
}

// Creating object of derived class
$pet = new Dog();
$pet->sound();  // from Animal
$pet->bark();   // from Dog
?>
