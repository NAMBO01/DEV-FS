<?php
$mang_so = [];


if (isset($_POST[$mang_so])) {
    $mang_so = "";
}
$ket_qua = array_sum($mang_so);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
            <h1 align="center">Nhập và tính dãy số </h1>
        </div>

        <div class="input-group">
            <div class="input-group-addon"> Nhập dãy số</div>
            <input type="text" class="form-control" id="mang_so" name="mang_so" value="<?php $mang_so ?>">
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Tổng dãy số </button>
            </div>
        </div>
        <div class="input-group">
            <div class="input-group-addon">Tổng dãy số</div>
            <input type="text" class="form-control" id="ket_qua" name="ket_qua" value="<?php echo $ket_qua ?>">
        </div>




    </form>

</body>

</html>