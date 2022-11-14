<?php
$diem_toan = "";
$diem_ly = "";
$diem_hoa = "";
$diem_chuan = "";
$tong_diem = "";
$ket_qua_thi = "";
if (isset($_POST['diem_toan']) && isset($_POST['diem_ly']) && isset($_POST['diem_hoa']) && isset($_POST['diem_chuan']) && isset($_POST['ket_qua_thi'])) {
    $diem_toan = $_POST['diem_toan'];
    $diem_ly = $_POST['diem_ly'];
    $diem_hoa = $_POST['diem_hoa'];
    $diem_chuan =  $_POST['diem_chuan'];

    $tong_diem = $diem_toan + $diem_ly + $diem_hoa;

    if ($tong_diem >= $diem_chuan && $diem_toan > 0 || $diem_ly > 0 || $diem_hoa > 0) {
        echo $ket_qua_thi = " Đậu ";
    } else {
        echo $ket_qua_thi = " Rớt ";
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
            <h1 align="center">Kết quả học tập</h1>
        </div>

        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Điểm toán </div>
            <input type="text" class="form-control" id="diem_toan" name="diem_toan" value="<?php echo $diem_toan; ?>">
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Điểm lý</div>
            <input type="text" class="form-control" id="diem_ly" name="diem_ly" value="<?php echo $diem_ly; ?>">
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Điểm hóa</div>
            <input type="text" class="form-control" id="diem_hoa" name="diem_hoa" value="<?php echo $diem_hoa; ?>">
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 ">Điểm chuẩn</div>
            <input type="text" class="form-control" id="diem_chuan" name="diem_chuan" value="<?php echo $diem_chuan; ?>">
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 ">Tổng điểm</div>
            <input type="text" class="form-control" readonly="false" id="tong_diem" name="tong_diem" value="<?php echo $tong_diem; ?>">
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Kết quả thi</div>
            <input type="text" class="form-control" readonly="false" id="ket_qua_thi" name="ket_qua_thi" value="<?php echo $ket_qua_thi; ?>">
        </div><br>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Xem kết quả</button>
            </div>
        </div>
    </form>

</body>

</html>