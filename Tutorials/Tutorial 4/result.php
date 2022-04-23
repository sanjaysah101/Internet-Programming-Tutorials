<?php 
    $principle =  $_GET['principle'];
    $roi =  $_GET['roi'];
    $noy =  $_GET['noy'];
    $totalInterest = $principle * $roi * $noy/100;
    $totalAmount = $principle + $totalInterest;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <span class="text-primary">Total Interest: </span><?= $totalInterest ?>
        <br>
        <span class="text-primary">Total Amount: </span><?= $totalAmount ?> 
    </div>
</body>
</html>