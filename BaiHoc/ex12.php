<?php
$canh_1 = "";
$canh_2 = "";
$canh_3 = "";
$loai_tam_giac = "";
if (isset($_POST['canh_1']) && isset($_POST['canh_2']) && isset($_POST['canh_3']) && isset($_POST['loai_tam_giac'])) {
    $canh_1 = $_POST['canh_1'];
    $canh_2 = $_POST['canh_2'];
    $canh_3 = $_POST['canh_3'];
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Nhận dạng tam giác </title>
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
            <div class=" col-md-10 "> Cạnh 1 </div>
            <input type="text" class="form-control" id="canh_1" name="canh_1" value="<?php echo $canh_1; ?>">
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Cạnh 2</div>
            <input type="text" class="form-control" id="canh_2" name="canh_2" value="<?php echo $canh_2; ?>">
        </div><br>
        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 "> Cạnh 3</div>
            <input type="text" class="form-control" id="canh_3" name="canh_3" value="<?php echo $canh_3; ?>">
        </div><br>


        <div class="input-group col-sm-offset-2">
            <div class=" col-md-10 ">Loại tam giác</div>
            <input type="text" class="form-control" readonly="false" id="loai_tam_giac" name="loai_tam_giac" value="<?php echo $loai_tam_giac; ?>">
        </div><br>



        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <button type="submit" class="btn btn-primary">Xem kết quả</button>
            </div>
        </div>
    </form>

</body>

</html>