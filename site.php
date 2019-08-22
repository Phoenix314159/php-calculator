<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Calculator</title>
</head>
<body>
<div class="total">
    <div>
        <form action="site.php" method="get">
            <div class="form-group">
                <input class="form-control" type="number" name="num1">
                <br>
                <input class="form-control" type="number" name="num2">
                <br>
                <input class="form-control" type="submit">
                <br>
            </div>    
        </form>
        <h1 class="answer"> <?php  echo $_GET["num1"] + $_GET["num2"]?></h1>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>