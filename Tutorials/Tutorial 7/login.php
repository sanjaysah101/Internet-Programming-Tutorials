

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
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username" value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE['username']; }?>">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE['password']; }?>">
            </div>
            <div class="form-check">
                <input type="checkbox" name="remember_me" id="rememberme" class="form-check-input">
                <label for="rememberme">Remember Me:</label>
            </div>
            <div class="form-group mt-3">
                <button type="submit" id="btnSubmit" class="btn btn-primary" name="login">Submit</button>
                <button type="submit" id="btnReSubmit" class="btn btn-primary">Re-Submit</button>
                <a href="registration.php" class="btn btn-warning">Not a user? Register from here</a>
            </div>
        </form>
    </div>
</body>

</html>