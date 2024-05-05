<?php
class fruit{
    public $Name;
    public $Color;
    public function setName ($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        echo "the color is".$this->color;
    }
}
$obj1=new fruit();
$obj1->setName("Orange");
echo $obj1->getName();
$obj1->setColor("Orange");
$obj1->getColor();
echo '<br>';
$obj2=new fruit();
$obj2->setName("Mango");
echo $obj2->getName();
$obj2->setColor("Yellow");
$obj2->getColor();
echo'<br>';
$obj3=new fruit ();
$obj3->setName("Pear");
echo $obj3->getName();
$obj3->setColor("Green");
$obj3->getColor();
echo '<br>';
$obj4=new fruit ();
$obj4->setName("Grape");
echo $obj4->getName();
$obj4->setColor("Purple");
$obj4->getColor();
echo '<br>';

?>