<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $databasename = "tutorial_6";
    
    $conn = new mysqli($hostname, $username, $password, $databasename);

    if ($conn->connect_error){
        die("Unable to Connect Database: ". $conn->connect_error);
    }
?>