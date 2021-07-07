<?php

$myFile = fopen("text.txt", "r") or die("Unable to open file!");

$newFile = fopen("newtext.txt", "w") or die("Unable to open file!");

$txt = "John Doe.\n";

fwrite($newFile, $txt);

$txt = "Jane Doe.";

fwrite($newFile, $txt);

while(!feof($myFile)) {
    echo fgets($myFile) . "<br>";
}

fclose($myFile);


?>