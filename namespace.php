<?php
    namespace Html;
    use Html as H;
    class Table {
        public $title = "";
        public $numRows = 0;
        public function message () {
            echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
        }
    }
    use Html\Table as T;

    $table = new Table();
    $table->title = "My Table";
    $table->numRows = 5;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Namespaces</title>
</head>
<body>
    <?php $table->message(); ?>
</body>
</html>