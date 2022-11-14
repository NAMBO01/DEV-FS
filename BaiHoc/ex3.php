<?php
$ban_kinh = "";
$chu_vi = "";
$dien_tich = "";

if (isset($_POST['ban_kinh']) && isset($_POST['chu_vi']) && isset($_POST['dien_tich'])) {

    $ban_kinh = $_POST['ban_kinh'];
    $chu_vi = 2 * $ban_kinh * pi();
    $dien_tich = pow($ban_kinh, 2) * pi();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính chu vi và diện tích hình tròn</title>
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
            <h1 align="center">Tính chu vi và diện tích hình tròn</h1>
        </div>

        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 "> Bán kính </div>
            <input type="text" class="form-control" id="ban_kinh" name="ban_kinh" value="<?php echo $ban_kinh; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Chu vi</div>
            <input type="text" class="form-control" id="chu_vi" readonly="false" name="chu_vi" value="<?php echo $chu_vi; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Diện tích</div>
            <input type="text" class="form-control" readonly="false" id="dien_tich" name="dien_tich" value="<?php echo $dien_tich; ?>">
        </div><br>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Tính</button>
            </div>
        </div>
    </form>

</body>

</html>