<script>
    function delete_tac_gia() {
        var kq = confirm('Bạn có muốn xóa tác giả này không');
        if (kq) {
            return true;
        } else {
            return false;
        }
    }
</script>

<div class="row">
    <?php
    if (isset($result)) {
        notice_after_process($result, 'Successfully deleted;', 'An error occurred while deleting, please try again;', $_GET['page']);
    }
    

    ?>

    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Quản Lý Tác Giả</h1>
        <a href="?page=nha-xuat-ban&chuc_nang=them-nha-xuat-ban">
            <button type="button" class="btn btn-primary">Thêm nhà tác giả mới</button>
        </a>
    </div>
    <!--End Page Header -->
    <div class="main_content">

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên tác giả</th>
                        <th>Ngày sinh</th>
                        <th>Giới thiệu</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ds_tac_gia as $tac_gia) {
                    ?>
                        <tr>
                            <td><?php echo $tac_gia->id ?></td>
                            <td><?php echo $tac_gia->ten_tac_gia ?></td>
                            <td><?php echo $tac_gia->ngay_sinh ?></td>
                            <td><?php echo $tac_gia->gioi_thieu ?></td>

                            <td>
                                <a href="?page=tac-gia&chuc_nang=update-tac-gia&id_update=<?php echo $tac_gia->id; ?>">
                                    <button type="button" class="btn btn-info">
                                        Sửa
                                    </button>
                                </a>

                                <a href="?page=tac-gia&id_xoa=<?php echo $tac_gia->id; ?>" onclick="return delete_tac_gia();">
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