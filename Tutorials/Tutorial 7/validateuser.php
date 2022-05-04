<?php
session_start();

if( ($_SERVER["REQUEST_METHOD"] == "POST") && isset($_POST['login'])){
    include('db.php');
    // session_start();
    // echo " df";
    $username = (isset($_POST['username'])? trim($_POST['username']) : '');
    $password = (isset($_POST['password'])? trim($_POST['password']) : '');
    // echo $username."<br>".$password;
    // if($username != "" && $password != ""){

        $sql = "select * from users where username = '$username'";
        $result = mysqli_query($conn, $sql);
        
        if (!$result) {
            echo "Could not successfully run query ($sql) from DB: " . mysql_error();
            exit;
        }

        if (mysqli_num_rows($result) == 0) {
            echo "No rows found, nothing to print so am exiting";
            exit;
        }



        
        // $num = mysqli_num_rows($result);
        // print_r($result);
        while($row = mysqli_fetch_assoc($result)){
            // echo "login sucess";
            $_SESSION['login_username'] = $row['name'];
            $_SESSION['email'] = $row['email'];
           
        }
        if(!empty($_POST["remember_me"])){
            $cookie_username = "username";
            // $cookie_username_value = $row["username"];
            $cookie_password = "password";
            // $cookie_password_value = $password;
            setcookie($cookie_username, $username, time() + (86400 *10));
            setcookie($cookie_password, $password, time() + (86400 *10));
        }
        header("location: index.php");
        // if($num == 1) {
        // }else {
        //     $error = "Your Login Name or Password is invalid";
        // }
    // }else{
    //     $error = "username or password is null";
    //     echo  $error;
    // }
}