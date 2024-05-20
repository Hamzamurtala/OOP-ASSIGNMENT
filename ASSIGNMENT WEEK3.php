	
<?php
//write examples of OOP with the usage of traits and interface.
//Traits:
 //AnimalTrait
trait AnimalTrait {
	public function sound() {
		// Default sound
		return "No sound";
	}
}

class Dog {
	use AnimalTrait;
	public function sound() {
		return "Woof!";
	}
}

class Cat {
	use AnimalTrait;
	public function sound() {
		return "Meow!";
	}
}

$dog = new Dog();
echo $dog->sound(); 
echo '<br>';

$cat = new Cat();
echo $cat->sound(); 


//Interfaces



interface Shape {
	public function area();
}

class Circle implements Shape {
	private $radius;

	public function __construct($radius) {
		$this->radius = $radius;
	}

	public function area() {
		return pi() * pow($this->radius, 2);
	}
}

class Rectangle implements Shape {
	private $width;
	private $height;

	public function __construct($width, $height) {
		$this->width = $width;
		$this->height = $height;
	}

	public function area() {
		return $this->width * $this->height;
	}
}

$circle = new Circle(5);
echo $circle->area(); 
echo '<br>';
$rectangle = new Rectangle(4, 5);
echo $rectangle->area(); 




?>
