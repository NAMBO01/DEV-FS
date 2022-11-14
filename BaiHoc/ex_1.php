<?php
$chieu_dai = "";
$chieu_rong = "";
$dien_tich = "";
if (isset($_POST['chieu_dai']) && isset($_POST['chieu_rong']) && isset($_POST['dien_tich'])) {
    $chieu_dai = $_POST['chieu_dai'];
    $chieu_rong = $_POST['chieu_rong'];
    $dien_tich = $chieu_dai * $chieu_rong;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính diện tích hình chữ nhật</title>
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
            <h1 align="center">Tính diện tích hình chữ nhật</h1>
        </div>

        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Chiều dài </div>
            <input type="text" class="form-control" id="chieu_dai" name="chieu_dai" value="<?php echo $chieu_dai; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Chiều rộng</div>
            <input type="text" class="form-control" id="chieu_rong" name="chieu_rong" value="<?php echo $chieu_rong; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Diện tích</div>
            <input type="text" class="form-control" readonly="false" id="dien_tich" name="dien_tich" value="<?php echo $dien_tich; ?>">
        </div>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</body>

</html>