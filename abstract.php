<?php
abstract class ParentClass {
    abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
    public function prefixName($name, $seperator = ".", $greet = "Dear") {
        if ($name == "John Doe") {
            $prefix = "Mr";
        } elseif ($name == "Jane Doe") {
            $prefix = "Mrs";
        } else {
            $prefix = "";
        }
        return "{$greet} {$prefix}{$seperator} {$name}";
    }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";

echo $class->prefixName("Jane Doe");
echo "<br>";


// Parent class
abstract class Car {
    public $name;
    public function __construct ($name) {
        $this->name = $name;
    }
    abstract public function intro () : string;
}


// Child classes
class Audi extends Car {
    public function intro () : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro () : string {
        return "Proud to be Swedish I'm an $this->name!";
    }
}

class Citroen extends Car {
    public function intro () : string {
        return "French extravagance! I'm an $this->name!";
    }
}


// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();
echo "<br>";

?>