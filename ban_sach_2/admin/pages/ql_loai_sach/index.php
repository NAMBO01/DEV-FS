<?php
include_once('../libaries/functions_support_view.php');

add_confirm_box_before_delete();
if (isset($result)) {
    notice_after_process($result, 'Đã xoá thành công loại sách có id là' . $_GET['page'], 'thêm loại sách mới thất bại, vui lòng kiểm tra và thử lại' . $_GET['id_xoa'], 'loai-sach');
}
?>
<div class="row">


    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý loại sách</h1>

        <a href="?page=loai-sach&chuc_nang=them">
            <button type="button" class="btn btn-primary">Thêm loại sách mới</button>
        </a>

    </div>
    <!--End Page Header -->
    <div class="main_content">

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên loại</th>
                        <th>Tên loại cha</th>
                        <th>Trạng thái</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ds_loai_sach as $loai_sach) {
                    ?>
                        <tr>
                            <td><?php echo $loai_sach->id ?></td>
                            <td><?php echo $loai_sach->ten_loai_sach ?></td>
                            <td><?php echo $loai_sach->id_loai_cha ?></td>
                            <td><?php echo $loai_sach->trang_thai ?></td>
                            <td>
                                <a href="?page=loai-sach&chuc_nang=update&id_update=<?php echo $loai_sach->id; ?>">
                                    <button type="button" class="btn btn-info">
                                        Sửa
                                    </button>
                                </a>


                                <a href="?page=loai-sach&id_xoa=<?php echo $loai_sach->id; ?>" onclick="return check_before_delete();">
                                    <button type="button" class="btn btn-danger">
                                        Xoá
                                    </button>
                                </a>

                            </td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>

    </div>
</div>