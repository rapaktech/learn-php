<?php

    $target_dir = "uploads/";
    
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

    $uploadOk = 1;

    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));



    // Check if image file is actual image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            echo "<br>";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            echo "<br>";
            $uploadOk = 0;
        }
    }


    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        echo "<br>";
        $uploadOk = 0;
    }


    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 512000) {
        echo "Image must be smaller than 500kb";
        echo "<br>";
        $uploadOk = 0;
    }


    // Allow certain file formats
    if ($imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG and GIF files are allowed.";
        echo "<br>";
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        echo "<br>";
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The image '" . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "' has been uploaded.";
            echo "<br>";
        } else {
            echo "Sorry, there was an error uploading your file. Check and try again";
            echo "<br>";
        }
    }

?>