<?php
$gia_tri_1 = "";
$gia_tri_2 = "";
$ket_qua = "";
if (isset($_POST["gia_tri_1"]) && isset($POST_["gia_tri_2"]) && isset($_POST["ket_qua"])) {
    $gia_tri_1 = $_POST["gia_tri_1"] ? (float)trim($_POST['gia_tri_1']) : '';
    $gia_tri_2 = $_POST["gia_tri_2"] ? (float)trim($_POST['gia_tri_2']) : '';
    if ($gia_tri_1 == 0) {
        if ($gia_tri_2 == 0) {
            echo $ket_qua = "Phương trình có vô số nghiệm";
        } else {
            echo $ket_qua = "Phương trình vô nghiệm";
        }
    } else {
        echo $ket_qua = - ($gia_tri_2) / $gia_tri_1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải phương trình bậc nhất </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>

<body>

    <form action="" method="POST" class="form-horizontal" role="form">
        <div class="form-group">
            <h1 align="center">Phương trình bậc nhất</h1>
        </div>


        <div class="col-sm-10 col-sm-offset-2">
            <input type="text" style="width: 50px" id="gia_tri_1" name="gia_tri_1" value="<?php echo $gia_tri_1 ?>" /> x
            +
            <input type="text" style="width: 50px" id="gia_tri_2" name="gia_tri_2" value="<?php echo $gia_tri_2 ?>" /> = 0
            <br><br>
        </div>

        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10">Kết quả</div>
            <input type="text" class="form-control" readonly="false" id="ket_qua" name="ket_qua" value="<?php echo $ket_qua ?>">
        </div><br><br>

        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

</body>

</html>