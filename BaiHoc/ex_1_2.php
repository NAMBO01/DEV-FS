<?php
$noi_dung = "";
$mau_chu = "";
$mau_nen = "";
if (isset($_POST['noi_dung']) && isset($_POST['mau_chu']) && isset($_POST['mau_nen'])) {
    $noi_dung = $_POST['noi_dung'];
    $mau_chu = $_POST['mau_chu'];
    $mau_nen = $_POST['mau_nen'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Định màu chữ - màu nền</title>
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
            <h1 align="center">Định màu chữ - màu nền</h1>
        </div>

        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 "> Nội dung </div>
            <input type="text" class="form-control" id="noi_dung" name="noi_dung" value="<?php  echo $noi_dung ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 "> Màu nền </div>
            <input type="text" class="form-control" id="mau_nen" name="mau_nen" value="<?php echo $mau_nen; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Màu chữ</div>
            <input type="text" class="form-control" id="mau_chu" name="mau_chu" value="<?php echo$mau_chu ?>">
        </div><br>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary"> Xem kết quả </button>
            </div>
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 " style="color: #<?php echo $mau_chu?>; background-color: #<?php echo $mau_nen?>;"><?php echo $noi_dung ?></div>
        </div>
    </form>

</body>

</html>