<?php

    // $servername = "127.0.0.1";
    // $username = "root";
    // $password = "";
    // $db = "tutorial9";

    $conn = new mysqli("localhost", "root", "", "tutorial10");


    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // echo "Connected successfully";        
?>