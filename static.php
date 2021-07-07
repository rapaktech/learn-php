<?php
class Greeting {
    public static function welcome () {
        echo "Hello World! ";
    }

    public function __construct () {
        self::welcome();
    }
}

Greeting::welcome();

new Greeting();

class SomeOtherClass {
    public function message() {
        Greeting::welcome();
    }
}

class domain {
    protected static function getWebsiteName() {
        return "W3Schools.com";
    }
}

class domainW3 extends domain {
    public $websiteName;
    public function __construct () {
        $this->websiteName = parent::getWebsiteName();
    }
}

$domainW3 = new domainW3;
echo $domainW3 -> websiteName;

?>