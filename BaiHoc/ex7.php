<?php
$so_gio = "";
$ket_qua ="";
if (isset($_POST['so_gio']) &&  isset($_POST['ket_qua'])) {
    $so_gio = $_POST['so_gio'];
    $ket_qua = $_POST['ket_qua'];
    switch ($so_gio) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
        case 7:
        case 8:
        case 9:
        case 10:
        case 11:
        case 12:
            echo $ket_qua = "Chào buổi sáng";
            break;
        case 13:
        case 14:
        case 15:
        case 16:
        case 17:
        case 18:
            echo $ket_qua = "Chào buổi chiều";
            break;
        case 19:
        case 20:
        case 21:
        case 22:
        case 23:
            echo $ket_qua = "Chào buổi tối";
            break;
        default:
            echo $ket_qua = "Nhập sai giờ";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm số lớn nhất</title>
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
            <h1 align="center">Tìm số lớn nhất</h1>
        </div>

        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Số giờ </div>
            <input type="text" class="form-control" id="so_gio" name="so_gio" value="<?php echo $so_gio; ?>">
        </div><br>

        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Chào</div>
            <input type="text" class="form-control" readonly="false" id="ket_qua" name="ket_qua" value="<?php echo $ket_qua; ?>">
        </div>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Chào</button>
            </div>
        </div>
    </form>

</body>

</html>