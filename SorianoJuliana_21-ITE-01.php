<?php

// Define the Person class
class Person {
    // Public properties
    public $firstName;
    public $lastName;
    
    // Private property
    private $age;

    // Constructor method
    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // Public method to get the full name
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Public method to set the age
    public function setAge($age) {
        $this->age = $age;
    }

    // Public method to get the age
    public function getAge() {
        return $this->age;
    }
}

// Define the Car class
class Car {
    // Public properties
    public $make;
    public $model;
    
    // Protected property
    protected $year;

    // Constructor method
    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // Public method to get car info
    public function getCarInfo() {
        return  $this->make .' '.$this->model .' '.$this->year;
    }
}

// Creating an instance of the Person class
$person = new Person('Juliana', 'Soriano', 19);

// Displaying the person's full name and age
echo 'Full Name: ' . $person->getFullName() ;
echo "\n";
echo 'Age: ' . $person->getAge() ;
echo "\n";

// Updating the person's age and displaying it again
$person->setAge(20);
echo 'Updated Age: ' . $person->getAge() ;
echo "\n" ;

// Creating an instance of the Car class
$car = new Car('Toyota', 'Camry', '(2022)');

echo 'Car Info: ' . $car->getCarInfo();

?>
