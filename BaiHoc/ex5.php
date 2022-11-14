<?php
$canh_A = "";
$canh_B = "";
$canh_huyen = "";
if (isset($_POST['canh_A']) && isset($_POST['canh_B']) && isset($_POST['canh_huyen'])) {
    $canh_A = $_POST['canh_A'];
    $canh_B = $_POST['canh_B'];
    $canh_huyen = sqrt(pow($canh_A, 2) + pow($canh_B, 2));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cạnh huyền tam giác vuông</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>

    <form action="" method="POST" class="form-horizontal" role="form">
        <div class="form-group ">
            <h1 align="center">Tính cạnh huyền tam giác vuông</h1>
        </div>

        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Cạnh A </div>
            <input type="text" class="form-control" id="canh_A" name="canh_A" value="<?php echo $canh_A; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Cạnh B</div>
            <input type="text" class="form-control" id="canh_B" name="canh_B" value="<?php echo $canh_B; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Cạnh Huyền</div>
            <input type="text" class="form-control" readonly="false" id="canh_huyen" name="canh_huyen" value="<?php echo $canh_huyen; ?>">
        </div>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Tính</button>
            </div>
        </div>
    </form>

</body>

</html>