<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm đơn hàng mới
        </h1>
    </div>
</div>
<?php
$dbh = new PDO('mysql:host=localhost;dbname=ban_sach_online_db;charset=utf8', 'root', '');
if (isset($_POST['ma_don_hang'])) {

    $ma_don_hang = $_POST['ma_don_hang'];
    $tong_tien = $_POST['tong_tien'];
    $ngay_dat = $_POST['ngay_dat'];
    $ho_ten_nguoi_nhan = $_POST['ho_ten_nguoi_nhan'];
    $email_nguoi_nhan = $_POST['email_nguoi_nhan'];
    $so_dien_thoai_nguoi_nhan = $_POST['so_dien_thoai_nguoi_nhan'];
    $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];
    $trang_thai = $_POST['trang_thai'] ? 1 : 0;


    // $sql = "INSERT INTO bs_don_hang(ma_don_hang, tong_tien, ngay_dat, ho_ten_nguoi_nhan,email_nguoi_nhan,so_dien_thoai_nguoi_nhan,dia_chi_nguoi_nhan) VALUES('$ma_don_hang', '$tong_tien', '$ngay_dat', '$ho_ten_nguoi_nhan','$email_nguoi_nhan', '$so_dien_thoai_nguoi_nhan', '$dia_chi_nguoi_nhan', '$trang_thai)";
    // $result = $dbh->exec($sql);

    $xl_loai_sach->add_order_to_list($ma_don_hang, $tong_tien, $ngay_dat, $ho_ten_nguoi_nhan, $email_nguoi_nhan, $so_dien_thoai_nguoi_nhan, $dia_chi_nguoi_nhan, $trang_thai);

    if ($result !== false) {
?>
        <script>
            alert('Successfully added order ');
            window.location.href('?page=' + <?php echo $_GET['page'] ?>);
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('add failed order, please check and try again');
        </script>
<?php
    }
}
?>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Basic Form Elements
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Mã đơn hàng </label>
                                <input name="ma_don_hang" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Tổng tiền</label>
                                <input name="tong_tien" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Ngày đặt</label>
                                <input name="ngay_dat" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Họ tên người nhận</label>
                                <input name="ho_ten_nguoi_nhan" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Email thoại người nhận</label>
                                <input name="email_nguoi_nhan" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại người nhận</label>
                                <input name="so_dien_thoai_nguoi_nhan" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ người nhận</label>
                                <input name="so_dien_thoai_nguoi_nhan" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <br />
                                <label class="switch">
                                    <input name="trang_thai" type="checkbox" checked>
                                    <span class="slider round"></span>
                                </label>
                                <p class="help-block">Example block-level help text here.</p>
                            </div>



                    </div>


                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <button type="reset" class="btn btn-success">Hủy</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form Elements -->
</div>
</div>