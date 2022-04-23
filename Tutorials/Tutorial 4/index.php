<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest Calc</title>
    <link rel="stylesheet" href="CSS/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <form action="result.php" method="get">
            <div class="form-group mt-3">
                <label for="principle" >Principle</label>
                <input type="number" name="principle" class="form-control" id="principle" min="0">
            </div>
            <div class="form-group">
                <label for="roi" >Rate of Interest</label>
                <input type="number" name="roi" id="roi" class="form-control" min="0">
            </div>
            <div class="form-group">
                <label for="noy" >No of Year</label>
                <input type="number" name="noy" id="noy" class="form-control" min="0">
            </div>
            <div class="form-group mt-3">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>