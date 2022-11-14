<?php
$file_tinh_nguyen_vien = 'data/tnv.txt';
$ket_qua = '';
class tinh_nguyen_vien
{
    public $ho_ten, $sdt, $ngay_sinh, $ngay_hien_mau;
    function __construct($ho_ten, $sdt, $ngay_sinh, $ngay_hien_mau)
    {
        $this->ho_ten = $ho_ten;
        $this->sdt = $sdt;
        $this->ngay_sinh = $ngay_sinh;
        $this->ngay_hien_mau = $ngay_hien_mau;
    }
    function string_save()
    {
        return implode('|', [$this->ho_ten, $this->sdt, $this->ngay_sinh, $this->ngay_hien_mau]) . PHP_EOL;
    }
    function save_into_file($file_tinh_nguyen_vien)
    {
        $f = fopen($file_tinh_nguyen_vien, 'a');
        fwrite($f, $this->string_save());
        fclose($f);
    }
    function tinh_ngay_hien_mau()
    {
        $array_date_ngay_hien_mau = explode('-', $this->ngay_hien_mau);
        $ngay_duoc_hien = date('Y', 'M', 'D') - date('Y', 'M', 'D', mktime(0, 0, 0, 1, 1, (int)$array_date_ngay_hien_mau[0]));
        if ($ngay_duoc_hien >= 84) {
            echo  'đủ thời gian hiến máu';
        } else {
            echo ' chưa đủ thời gian để hiến máu';
            
        }
    }
}
$string_mang_tinh_nguyen_vien = file_get_contents($file_tinh_nguyen_vien);
$mang_tinh_nguyen_vien = explode(PHP_EOL, $string_mang_tinh_nguyen_vien);
if (isset($_POST['ho_ten'])) {
    if (in_array($_POST['ho_ten'], $mang_tinh_nguyen_vien)) {
        return parent::tinh_ngay_hien_mau();
    } else {
        $them_tinh_nguyen_vien = new tinh_nguyen_vien($_POST['ho_ten'], $_POST['sdt'], $_POST['ngay_sinh'], $_POST['ngay_hien_mau']);
        $them_tinh_nguyen_vien->save_into_file($file_tinh_nguyen_vien);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tình nguyện viên </title>

    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">

        <form action="" method="POST" class="form-horizontal" role="form">
            <div class="form-group">
                <legend align="center"> Quản lý tình nguyện viên hiến máu</legend>
            </div>


            <div class="input-group">
                <div class="input-group-addon">Họ và tên: </div>
                <input type="text" name="ho_ten" value="<?php echo (isset($_POST['ho_ten'])) ? $_POST['ho_ten'] : ''; ?>" class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-addon">Số điện thoại: </div>
                <input type="text" name="sdt" value="<?php echo (isset($_POST['sdt'])) ? $_POST['sdt'] : ''; ?>" class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-addon">Ngày sinh: </div>
                <input type="date" name="ngay_sinh" value="<?php echo (isset($_POST['ngay_sinh'])) ? $_POST['ngay_sinh'] : ''; ?>" class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-addon">Ngày hiến máu: </div>
                <input type="date" name="ngay_hien_mau" value="<?php echo (isset($_POST['ngay_hien_mau'])) ? $_POST['ngay_hien_mau'] : ''; ?>" class="form-control">
            </div>
            <div class="input-group">
                <div class="input-group-addon">Kết quả: </div>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Kiểm tra</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-10 col-sm-offset-2">
                    <button type="submit" class="btn btn-primary">Kiểm tra</button>
                </div>
            </div>
        </form>

    </div>
</body>

</html>