<?php
    class pi {
        public static $value = 3.14159;
        public function staticValue () {
            return self::$value;
        }
    }

    $pi = new pi();
    echo $pi->staticValue();
    echo "<br>";

    class x extends pi {
        public function xStatic ()  {
            return parent::$value;
        }
    }

    echo x::$value;
    echo "<br>";

    $x = new x();
    echo $x->xStatic();
    echo "<br>";
?>