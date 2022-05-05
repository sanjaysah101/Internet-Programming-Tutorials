<?php

session_start();
include('include/connection.php');
$display = $conn->query("
SELECT 
id,machine_name,description 
FROM tbl_machine
where
is_delete = 0");
$msg = isset($_SESSION['msg']) ? $_SESSION['msg'] : "";
unset($_SESSION['msg']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<title>Tutorial-11</title>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
	

    
</head>

<body>
    <div class="container mx-auto" style="margin-top: 8%;">
        <a class="btn btn-success" href="formdata.php" style="float: right; margin-bottom: 2%;">Add Record</a>
        <h2 style="margin-bottom: 2%; text-align:center;">Tutorial-11</h2>
        <h4 class="mb-2"><?= $msg ?></h4>
        <div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
                        <table class="table table-dark">
                            <thead>
                                <tr class="bg-dark">
                                    <th>Id</th>
                                    <th>Machine Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
            <?php
            if (mysqli_num_rows($display)) {
                while ($row = $display->fetch_assoc()) { ?>
                    <tr class="bg-success">
                        <td scope="col"><?= $row['id']; ?></td>
                        <td scope="col"><?= $row['machine_name']; ?></td>
                        <td scope="col"><?= $row['description'] ?></td>
                        <td><a href="formdata.php?id=<?= $row['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="delete_data.php?id=<?= $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
            <?php }
            } ?>
        </table>
    </div>
        </div>
        </div>
        </div>
        <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>