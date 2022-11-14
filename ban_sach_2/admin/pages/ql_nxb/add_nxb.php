<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm nhà xuất bản mới
        </h1>
    </div>
</div>
<?php
if (isset($result)) {
    notice_after_process($result, 'Successfully added publisher ', 'add publisher failed, please check and try again', 'nha-xuat-ban');
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
                                <label>Tên Nhà Xuất Bản</label>
                                <input name="ten_nha_xuat_ban" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <input name="dia_chi" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Điện Thoại</label>
                                <input name="dien_thoai" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Emai</label>
                                <input name="email" class="form-control">
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