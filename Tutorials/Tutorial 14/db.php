<?php
    $conn = new mysqli("localhost", "root", "", "hr_module");
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // echo "Connected successfully";        
?>