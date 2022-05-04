<?php
error_reporting(0);
?>
<?php
$msg = "";
session_start();
// If upload button is clicked ...
if (isset($_POST['upload'])) {
    $username = $_POST["username"];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "uploads/" . $filename;
    echo $filename;
    echo "<br>";
    echo $username;
    echo "<br>";
    echo $tempname;
    echo "<br>";
    echo $folder;

    $db = mysqli_connect("localhost", "root", "", "tutorial_6");
    
    if (move_uploaded_file($tempname, $folder)) {
        $sql = "UPDATE `users` SET `image`= '$filename' WHERE `username` = '$username'";
        mysqli_query($db, $sql);
        echo "<script> alert('File Uploaded Successful');</script>";
    } else {
        $msg = "Failed to upload image";
        echo "<script> alert(".$msg.");</script>";
    }
}

?>
