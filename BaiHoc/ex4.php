<?php
$chu_ho = "";
$chi_so_cu = "";
$chi_so_moi = "";
$don_gia = "";
$thanh_toan = "";
if (isset($_POST['chu_ho']) && isset($_POST['chi_so_cu']) && isset($_POST['chi_so_moi']) && isset($_POST['don_gia']) && isset($_POST['thanh_toan'])) {
    $chu_ho = $_POST['chu_ho'];
    $chi_so_cu = $_POST['chi_so_cu'];
    $chi_so_moi = $_POST['chi_so_moi'];
    $don_gia = $_POST['don_gia'];
    $thanh_toan = ($chi_so_moi - $chi_so_cu) * $don_gia;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tiền điện</title>
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
            <h1 align="center">Thanh toán tiền điện</h1>
        </div>

        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Tên chủ hộ </div>
            <input type="text" class="form-control" id="chu_ho" name="chu_ho" value="<?php echo $chu_ho; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Chỉ số cũ</div>
            <input type="text" class="form-control" id="chi_so_cu" name="chi_so_cu" value="<?php echo $chi_so_cu; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">chỉ số mới</div>
            <input type="text" class="form-control" id="chi_so_moi" name="chi_so_moi" value="<?php echo $chi_so_moi; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Đơn giá</div>
            <input type="text" class="form-control" id="don_gia" name="don_gia" value="<?php echo $don_gia; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Số tiền thanh toán</div>
            <input type="text" class="form-control" readonly="false" id="thanh_toan" name="thanh_toan" value="<?php echo $thanh_toan; ?>">
        </div>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Tính</button>
            </div>
        </div>
    </form>

</body>

</html>