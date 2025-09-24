<?php

class Car 
{
    // Properties (variables)
    public $brand;
    public $model;
    public $year;

    // Method (function)
    public function displayInfo()
     {
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Year: " . $this->year . "<br>";
        echo "<hr>";
    }
}

// Object 1
$car1 = new Car();
$car1->brand = "Toyota";
$car1->model = "Fortuner";
$car1->year = 2022;
$car1->displayInfo();

// Object 2
$car2 = new Car();
$car2->brand = "Hyundai";
$car2->model = "Creta";
$car2->year = 2023;
$car2->displayInfo();
?>
