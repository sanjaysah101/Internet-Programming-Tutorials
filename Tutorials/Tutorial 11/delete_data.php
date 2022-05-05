<?php
    session_start();
    include("include/connection.php");

    $id = isset($_GET['id']) ? $_GET['id']:0;
    
    //Hard delete
    $sql = "delete from tbl_machine where id = '$id'";

    $result = $conn->query($sql);
    
    if($conn->affected_rows)
    {
        $_SESSION['msg'] = "Record deleted!";
    }
    else
    {
        $_SESSION['msg'] = "Record not deleted";    
    }
    header("location:index.php");
