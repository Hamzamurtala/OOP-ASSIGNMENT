<?php

//write an oop program to demonstrate function overloading & overriding

class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // Overloading
    public function calculateArea() {
        echo "Calculating area of {$this->name}...\n";
    }

    // Overriding
    public function calculatePerimeter() {
        echo "Calculating perimeter of {$this->name}...\n";
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $width, $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    // Overloading
    public function calculateArea() {
        $area = $this->width * $this->height;
        echo "Area of {$this->getName()}: $area\n";
    }

    // Overriding
    public function calculatePerimeter() {
        $perimeter = 2 * ($this->width + $this->height);
        echo "Perimeter of {$this->getName()}: $perimeter\n";
    }
}

// Create instances and demonstrate function overloading and overriding
$shape = new Shape("Shape");
$shape->calculateArea();
$shape->calculatePerimeter();

$rectangle = new Rectangle("Rectangle", 5, 3);
$rectangle->calculateArea();
$rectangle->calculatePerimeter();

?>

