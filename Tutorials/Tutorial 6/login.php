<?php
session_start();
if(isset($_SESSION["username"]))
{
	header("location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script>

    </script>
</head>

<body>
    
    <div class="container">
        <h2>Login Form</h2>
        <form action="validateuser.php" method="post" id="clientform">
            <div class="form-group">
                <label for="email">Username:</label>
                <input type="email" class="form-control" id="username" placeholder="nikhil@gmail.com" name="username">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="123456" name="password">
            </div>
            <div class="form-group mt-3">
                <button type="submit" id="btnSubmit" class="btn btn-primary">Submit</button>
                <button type="submit" id="btnReSubmit" class="btn btn-primary">Re-Submit</button>
                <a href="registration.php" class="btn btn-warning">Not a user? Register from here</a>
            </div>
        </form>
    </div>
</body>

</html>