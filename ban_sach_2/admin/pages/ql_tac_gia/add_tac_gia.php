<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm tác giả mới
        </h1>
    </div>
</div>
<?php
if (isset($result)) {
    notice_after_process($result, ' successfully added new author ', 'add new author failed, please check and try again', $_GET['page']);
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