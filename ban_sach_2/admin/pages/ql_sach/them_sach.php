<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Thêm sách mới
        </h1>
    </div>
</div>
<?php
if (isset($result)) {
    notice_after_process($result, 'successfully added book', 'add book failed, please check and try again', 'sach');
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
                                <label>Tên sách</label>
                                <input name="ten_sach" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Giới Thiệu</label>
                                <input name="gioi_thieu" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>ID tác giả</label>
                                <input name="id_tac_gia" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>
                            <div class="form-group">
                                <label>Giá bìa</label>
                                <input name="gia_bia" class="form-control">
                                <p class="help-block">Example block-level help text here.</p>
                            </div>


                            </select>
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