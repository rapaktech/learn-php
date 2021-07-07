<?php

class Fruit {
    // Properties
    public $name;
    public $color;

    // Constructor
    public function __construct ($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    // Methods
    protected function intro () {
        echo "The fruit is {$this->name} and the color is {$this->color}.";
        echo "<br>";
    }

    public function get_name () {
        return $this->name;
    }

    public function get_color () {
        return $this->color;
    }
}

class Strawberry extends Fruit {
    public function message () {
        echo "I am a fruit or a berry? ";
        $this->intro();
    }
}

$apple = new Fruit("Apple", "Red");
$banana = new Fruit("Banana", "Yellow");


echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
echo "<br>";

echo "Name: " . $banana->get_name();
echo "<br>";
echo "Color: " . $banana->get_color();
echo "<br>";
echo "<br>";
echo "<br>";

$strawberry = new Strawberry("Strawberry", "Red");
$strawberry->message();
echo "<br>";
echo "<br>";

?>