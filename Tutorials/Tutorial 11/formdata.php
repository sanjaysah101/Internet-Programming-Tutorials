<?php
session_start();
include("include/connection.php");
$id = isset($_GET['id']) ? $_GET['id'] : 0;
$sql = "
SELECT
machine_name,description 
FROM tbl_machine where id = $id";
$result = $conn->query($sql);
if ($result->num_rows) {
    $row = $result->fetch_assoc();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container" style="margin-top:15%; margin-left: 30%;">
        <form method="post" action="savedata.php">
            <h2></h2>
            <input type="hidden" name="id" value="<?= $id ?>"></input>
            <div class="form-group col-5">
                <label>Machine Name :</label>
                <input type="text" class="form-control mt-2 mb-2" name="machinename" value="<?= isset($row['machine_name']) ? $row['machine_name'] : "" ?>">
            </div>
            <div class="form-group col-5">
                <label>Description:</label>
                <input type="text" class="form-control mt-2 mb-2" name="description" value="<?= isset($row['description']) ? $row['description'] : "" ?>">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="index.php" class="btn btn-danger">Back</a>
        </form>
    </div>
</body>

</html>