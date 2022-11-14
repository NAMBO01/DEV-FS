<?php
$so_thu_nhat="";
$so_thu_hai="";
$ket_qua="";
if(isset($_POST["so_thu_nhat"])&&isset($_POST["so_thu_hai"])&&isset($_POST["ket_qua"])){
    $so_thu_nhat=$_POST["so_thu_nhat"];
    $so_thu_hai=$_POST["so_thu_hai"];
    $ket_qua=$_POST["ket_qua"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
</head>
<body>
    
    <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend>Form title</legend>
            </div>
    
            
            <div class="input-group">
                <div class="input-group-addon">Số thứ nhất</div>
                <input type="text" class="form-control" id="so_thu_nhat">
            </div>
            
            <div class="input-group">
                <div class="input-group-addon">Số thứ hai</div>
                <input type="text" class="form-control" id="so_thu_hai" >
            </div>
            <div class="input-group">
                <div class="input-group-addon">Kết quả</div>
                <input type="text" class="form-control" id="so_thu_hai" >
            </div>
            
    
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
    </form>
    
</body>
</html>