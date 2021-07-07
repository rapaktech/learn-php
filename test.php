<?php
require "namespace.php";
use Html as H;
use Html\Table as T;
$table = new T();
$table->title = "My Table";
$table->numRows = 5;
$table->message();

?>