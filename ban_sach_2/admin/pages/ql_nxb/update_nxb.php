<?php
include_once('../libaries/functions_support_view.php');

?>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Cập nhật nhà xuất bản có ID là <?php echo $id_update ?></h1>
    </div>
    <!--end page header -->
</div>



<?php
if (isset($result)) {
    notice_after_process($result, 'Update publisher successfully', 'Update publisher information failed, please try again', $_GET['page']);
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
                                <label>Tên nhà xuất bản</label>
                                <input name="ten_nha_xuat_ban" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input name="dia_chi" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Điện thoại</label>
                                <input name="dien_thoai" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input name="email" class="form-control">
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