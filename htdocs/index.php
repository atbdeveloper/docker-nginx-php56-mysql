<?php
    date_default_timezone_set('UTC'); // Set your desired timezone

    $servername = "mysql";
    $username = "root";
    $password = "secret_password";
    $dbname = "project1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die(json_encode(array('outcome' => false, 'message' => 'Unable to connect')));
    } else {
        die(json_encode(array('outcome' => true)));
    }

    $conn->close();
?>