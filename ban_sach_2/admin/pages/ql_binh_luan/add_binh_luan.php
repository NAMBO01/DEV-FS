<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm tác giả mới
        </h1>
    </div>
</div>
<?php
$dbh = new PDO('mysql:host=localhost;dbname=ban_sach_online_db;charset=utf8', 'root', '');
if (isset($_POST['ten_tac_gia'])) {

    $ten_tac_gia = $_POST['ten_tac_gia'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $gioi_thieu = $_POST['gioi_thieu'];


    // $sql = "INSERT INTO bs_sach(ten_tac_gia, ngay_sinh, gioi_thieu) VALUES('$ten_tac_gia', '$ngay_sinh', '$gioi_thieu')";
    // $result = $dbh->exec($sql);

    $xl_loai_sach->add_tac_gia_to_list($ten_tac_gia, $dia_chi, $ngay_sinh, $gioi_thieu);

    if ($result !== false) {
?>
        <script>
            alert(' successfully added new author ');
            window.location.href('?page=' + <?php echo $_GET['page'] ?>);
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('add new author failed, please check and try again');
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
                                <label>Tên Tác Giả</label>
                                <input name="ten_tac_gia" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Ngày Sinh</label>
                                <input name="ngay_sinh" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Giới Thiệu</label>
                                <input name="gioi_thieu" class="form-control">
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