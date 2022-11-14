<?php
$diem_hk1 = "";
$diem_hk2 = "";
$dtb = "";
$ket_qua = "";
$xep_loai = "";
if (isset($_POST['diem_hk1']) && isset($_POST['diem_hk2']) && isset($_POST['ket_qua']) && isset($_POST['dtb']) && isset($_POST['xep_loai'])) {
    $diem_hk1 = $_POST['diem_hk1'];
    $diem_hk2 = $_POST['diem_hk2'];
    $dtb = ($diem_hk1 + $diem_hk2 * 2) / 3;

    if ($dtb >= 5) {
        echo $ket_qua = " Được lên lớp ";
    } else {
        echo $ket_qua = " Ở lại lớp ";
    };

    if ($dtb >= 8) {
        echo $xep_loai = " Xếp loại giỏi ";
    } else if (6.5 < $dtb && $dtb < 8) {
        echo $xep_loai = " Xếp loại khá ";
    } else if (5 <= $dtb && $dtb < 6.5) {
        echo $xep_loai = " Xếp loại trung bình";
    } else {
        echo $xep_loai = "Xếp loại yếu";
    };
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
            <div class="col-md-10 "> Điểm học kỳ 1 </div>
            <input type="text" class="form-control" id="diem_hk1" name="diem_hk1" value="<?php echo $diem_hk1; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 "> Điểm học kỳ 2</div>
            <input type="text" class="form-control" id="diem_hk2" name="diem_hk2" value="<?php echo $diem_hk2; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Kết quả</div>
            <input type="text" class="form-control" readonly="false" id="ket_qua" name="ket_qua" value="<?php echo $ket_qua; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Xếp loại</div>
            <input type="text" class="form-control" readonly="false" id="xep_loai" name="xep_loai" value="<?php echo $xep_loai; ?>">
        </div>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Xem kết quả</button>
            </div>
        </div>
    </form>

</body>

</html>