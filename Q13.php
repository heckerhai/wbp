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

//Multi-level inheritance
<?php
// Base class
class Grandfather {
    public function showGrandfather() {
        echo "I am the Grandfather.<br>";
    }
}

// First level child
class Father extends Grandfather {
    public function showFather() {
        echo "I am the Father.<br>";
    }
}

// Second level child (inherits from Father)
class Son extends Father {
    public function showSon() {
        echo "I am the Son.<br>";
    }
}

// Create object of the lowest class
$person = new Son();
$person->showGrandfather();
$person->showFather();
$person->showSon();
?>

//Multiple inheritance (via traits)
<?php
// Trait 1
trait Engine {
    public function startEngine() {
        echo "Engine started.<br>";
    }
}

// Trait 2
trait MusicSystem {
    public function playMusic() {
        echo "Playing music...<br>";
    }
}

// Class using both traits
class Car {
    use Engine, MusicSystem;

    public function drive() {
        echo "Car is driving.<br>";
    }
}

// Create object of Car
$myCar = new Car();
$myCar->startEngine();
$myCar->playMusic();
$myCar->drive();
?>

