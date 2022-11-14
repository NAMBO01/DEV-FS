<?php
include_once('../libaries/functions_support_view.php');
add_confirm_box_before_delete();
if (isset($result)) {
    notice_after_process($result, 'Successfully deleted', 'An error occurred while deleting, please try again', 'nha-xuat-ban');
}
?>
<link rel="stylesheet" href="http://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
<script src="http://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<div class="row">

    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Quản Lý Nhà Xuất Bản</h1>
        <a href="?page=nha-xuat-ban&chuc_nang=them-nha-xuat-ban">
            <button type="button" class="btn btn-primary">Thêm nhà xuất bản mới</button>
        </a>
        <div class="contain_form_tim_kiem">

            <form action="" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Tìm kiếm</legend>
                </div>

                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" name="tim_kiem" id="inputtim_kiem" class="form-control" value="" title="">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <!--End Page Header -->
    <div class="main_content">

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên nhà xuất bản</th>
                        <th>Địa chỉ</th>
                        <th>Điện thoại</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ds_nxb as $nxb) {
                    ?>
                        <tr>
                            <td><?php echo $nxb->id ?></td>
                            <td><?php echo $nxb->ten_nha_xuat_ban ?></td>
                            <td><?php echo $nxb->dia_chi ?></td>
                            <td><?php echo $nxb->dien_thoai ?></td>
                            <td><?php echo $nxb->email ?></td>

                            <td>
                                <a href="?page=nha-xuat-ban&chuc_nang=update-nha-xuat-ban&id_update=<?php echo $nxb->id; ?>">
                                    <button type="button" class="btn btn-info">
                                        Sửa
                                    </button>
                                </a>

                                <a href="?page=nha-xuat-ban&id_xoa=<?php echo $nxb->id; ?>" onclick="return check_before_delete();">
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