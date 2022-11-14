<?php
$gio_bat_dau = "";
$gio_ket_thuc = "";
$thanh_toan = "";
if (isset($_POST['gio_bat_dau']) && isset($_POST['gio_ket_thuc']) && isset($_POST['thanh_toan'])) {
    $gio_bat_dau = $_POST['gio_bat_dau'];
    $gio_ket_thuc = $_POST['gio_ket_thuc'];
    if ($gio_ket_thuc > $gio_bat_dau) {
        if (10 < $gio_bat_dau ) {
            echo $thanh_toan = ($gio_ket_thuc - $gio_bat_dau) * 20000;
        } else if (17 < $gio_bat_dau ) {
            echo $thanh_toan = ($gio_ket_thuc - $gio_bat_dau) * 45000;
        } else {
            echo $thanh_toan = ((17 - 10) * 20000) + ($gio_ket_thuc - (17 - 10) * 45000);
        }
    } else {
        echo $thanh_toan = "giờ kết thúc phải lớn hơn giờ bắt đầu";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả học tập</title>
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
            <h1 align="center">Tiền hát karaoke</h1>
        </div> 
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Giờ bắt đầu </div>
            <input type="text" class="form-control" id="gio_bat_dau" name="gio_bat_dau" value="<?php echo $gio_bat_dau; ?>">
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Giờ kết thúc </div>
            <input type="text" class="form-control" id="gio_ket_thuc" name="gio_ket_thuc" value="<?php echo $gio_ket_thuc; ?>">
        </div><br>

        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Tiền thanh toán</div>
            <input type="text" class="form-control" readonly="false" id="thanh_toan" name="thanh_toan" value="<?php echo $thanh_toan; ?>">
        </div><br>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Xem kết quả</button>
            </div>
        </div>
    </form>

</body>

</html>