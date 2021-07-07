<?php
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

    echo json_encode($age);
    echo '<br>';

    $name = array("Peter", "Ben", "Joe");

    echo json_encode($name);
    echo '<br>';

    $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';

    var_dump(json_decode($jsonobj));
?>