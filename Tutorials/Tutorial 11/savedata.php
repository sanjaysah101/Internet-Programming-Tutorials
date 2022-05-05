<?php

session_start();
include('include/connection.php');

$id = isset($_POST['id']) ? $_POST['id'] : 0;

echo $id;

$machine_name = isset($_POST['machinename']) ? $_POST['machinename'] : "";
$description = isset($_POST['description']) ? $_POST['description'] : "";

$sql = "";

if ($id) {
    $sql = "UPDATE tbl_machine SET machine_name = '$machine_name',description = '$description' where id = $id";
} else {
    $sql = "INSERT into tbl_machine (machine_name,description)
                        values('$machine_name', '$description')";
}

$conn->query($sql);

if ($conn->affected_rows) {
    $_SESSION['msg'] = "Operation Successful!";

} else {
    $_SESSION['msg'] = "Operation Failed!";
}
header("location:index.php");
