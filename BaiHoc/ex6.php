<?php
$so_A = "";
$so_B = "";
$ket_qua = "";
if (isset($_POST['so_A']) && isset($_POST['so_B']) && isset($_POST['ket_qua'])) {
    $so_A = $_POST['so_A'];
    $so_B = $_POST['so_B'];
    if ($so_A > $so_B) {
        $ket_qua = $so_A;
    } else {
        $ket_qua = $so_B;
    };
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
            <div class="col-md-10 ">Số A </div>
            <input type="text" class="form-control" id="so_A" name="so_A" value="<?php echo $so_A; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Số B</div>
            <input type="text" class="form-control" id="so_B" name="so_B" value="<?php echo $so_B; ?>">
        </div>
        <div class="input-group col-sm-offset-2">
            <div class="col-md-10 ">Kết quả</div>
            <input type="text" class="form-control" readonly="false" id="ket_qua" name="ket_qua" value="<?php echo $ket_qua; ?>">
        </div>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Tính</button>
            </div>
        </div>
    </form>

</body>

</html>