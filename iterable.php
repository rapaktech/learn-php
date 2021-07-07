<?php
function printIterable (iterable $myIterable) {
    foreach ($myIterable as $item) {
        echo $item;
    }
}

function getIterable ():iterable {
    return ["a", "b", "c"];
}

$arr = ["a", "b", "c"];

printIterable($arr);

$myIterable = getIterable();
foreach ($myIterable as $item) {
    echo $item;
}

// Implementation of the iterable interface
class MyIterator implements Iterator {
    private $items = [];
    private $pointer = 0;

    public function __construct ($items) {
        $this->items = array_values($items);
    }

    public function current () {
        return $this->items[$this->pointer];
    }

    public function key () {
        return $this->pointer++;
    }

    public function next () {
        $this->pointer++;
    }

    public function rewind () {
        $this->pointer = 0;
    }

    public function valid () {
        return $this->pointer < count($this->items);
    }
}

$iterator = new MyIterator(["A"=>"a", "B"=>"b", "C"=>"c"]);

printIterable($iterator);
?>