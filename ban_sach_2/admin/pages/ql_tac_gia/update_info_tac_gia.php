<?php
$id_update = '';
if (isset($_GET['id_update'])) {
    $id_update = $_GET['id_update'];
} else {
?>
    <script>
        window.location.href = "?page=tac-gia";
    </script>
<?php
}
?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Cập nhật tác giả có ID là <?php echo $id_update ?></h1>
    </div>
    <!--end page header -->
</div>

<?php
$dbh = new PDO('mysql:host=localhost;dbname=ban_sach_online_db;charset=utf8', 'root', '');
// $sql = "SELECT * FROM bs_sach WHERE id =" . $id_sua;
// $sth = $dbh->prepare($sql);
// $sth->execute();
// $update_Book_Info = $sth->fetch(PDO::FETCH_OBJ);

$update_info_tac_gia = $xl_loai_sach->load_all_tac_gia_from_list();

//echo '<pre>',print_r($_POST),'</pre>';

if (isset($_POST['ten_tac_gia'])) {
    $ten_tac_gia = $_POST['ten_tac_gia'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $gioi_thieu = $_POST['gioi_thieu'];


    // $sql = "UPDATE bs_tac_gia SET ten_tac_gia=$ten_tac_gia, ngay_sinh=$ngay_sinh, gioi_thieu=$gioi_thieu WHERE id= $id_update";
    // $result = $dbh->exec($sql);
    $xl_loai_sach->update_tac_gia_to_List($ten_tac_gia, $ngay_sinh, $gioi_thieu);

    if ($result !== false) {
?>
        <script>
            alert('Update author information successfully');
            window.location.href = '?page=' + '<?php echo $_GET['page'] ?>';
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Update author information failed, please try again');
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
                                <label>Tên tác giả</label>
                                <input name="ten_nha_xuat_ban" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input name="ngay_sinh" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Giới thiệu</label>
                                <input name="gioi_thieu" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>




                            <button type="submit" class="btn btn-primary">Submit Button</button>
                            <button type="reset" class="btn btn-success">Reset Button</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>