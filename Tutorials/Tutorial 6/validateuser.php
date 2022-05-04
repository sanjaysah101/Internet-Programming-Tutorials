<?php

    session_start();

    $email = (isset($_POST['username'])? trim($_POST['username']) : '');
    $password = (isset($_POST['password'])? trim($_POST['password']) : '');
    
    if ($email == 'example@gmail.com' && $password == '123456') {
        
        $_SESSION['username'] = $e;

        header('location:index.php');

    }
    else{
        echo '<script>alert("Please enter valid data!!");</script>';
        echo '<script type="text/javascript">';
        echo 'window.location.href="login.php";';
        echo '</script>';
    }

?>