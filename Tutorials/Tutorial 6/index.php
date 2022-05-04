<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {

        });
    </script>
    <title>Document</title>
</head>

<body>
   
    <div class="container">
        <h1>Registration Data</h1>

        <a href="logout.php" class="btn btn-primary">Logout </a>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Sr.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Enrollment</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>1</th>
                    <td>Rajesh Joshi</td>
                    <td>rajesh@gmail.com</td>
                    <td>20SOECE11011</td>
                    <td>
                        <a href="form.php" class="btn btn-warning">Edit</a>
                        <a href="action.php" class="btn btn-danger delete">Delete</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>