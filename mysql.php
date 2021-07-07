<?php
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "myDB";
    $conn = new mysqli ($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstname, $lastname, $email);

    $firstname = "Jane";
    $lastname = "Doe";
    $email = "jane@example.com";
    $stmt->execute();
    
    if ($conn->query($sql) === TRUE) {
        $last_id = $conn->insert_id;
        echo "New record created successfully. Last inserted ID is: " . $last_id;
    } else {
        echo "Error creating record: " . $conn->error;
    }

    $conn->close();
?>