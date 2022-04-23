<?php 
    $mn = isset($_GET["month"])?$_GET["month"]:0;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial 05</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <!-- form -->
    <div class="container m-5">

        <form action="result.php" method="get">
            <div class="form-group">
                <label for="month-name">Month Name</label>
                <select class="custom-select" id="month-name" name="month">
                    <option value="1" <?= ($mn ==1)? "selected":"" ?>>January</option>
                    <option value="2" <?= ($mn ==2)? "selected":"" ?>>February</option>
                    <option value="3" <?= ($mn ==3)? "selected":"" ?>>March</option>
                    <option value="4" <?= ($mn ==4)? "selected":"" ?>>April</option>
                    <option value="5" <?= ($mn ==5)? "selected":"" ?>>May</option>
                    <option value="6" <?= ($mn ==6)? "selected":"" ?>>June</option>
                    <option value="7" <?= ($mn ==7)? "selected":"" ?>>July</option>
                    <option value="8" <?= ($mn ==8)? "selected":"" ?>>August</option>
                    <option value="9" <?= ($mn ==9)? "selected":"" ?>>September</option>
                    <option value="10" <?= ($mn ==10)? "selected":"" ?>>October</option>
                    <option value="11" <?= ($mn ==11)? "selected":"" ?>>November</option>
                    <option value="12" <?= ($mn ==12)? "selected":"" ?>>December</option>
            </select>
            </div>
        </form>
    </div>
</body>

</html>