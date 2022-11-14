<!-- <script>
    function delete_book() {
        var kq = confirm('Bạn có muốn xóa cuốn sách này không');
        if (kq) {
            return true;
        } else {
            return false;
        }
    }
</script> -->
<?php
include_once('../libaries/functions_support_view.php');

add_confirm_box_before_delete();
if (isset($result)) {
    notice_after_process($result, 'Successfully deleted', 'An error occurred while deleting, please try again', 'sach');
}
?>

<div class="row">

    <link rel="stylesheet" href="http://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <script src="http://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <style>
        #ds_sach img {
            max-width: 50px;
            cursor: pointer;
        }
    </style>
    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Quản lý Sách</h1>
        <a href="?page=sach&chuc_nang=them_sach">
            <button type="button" class="btn btn-primary">Thêm sách mới</button>
        </a>
    </div>
    <!--End Page Header -->
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
<div class="main_content">

    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sách</th>
                    <th>Giới thiệu</th>
                    <th>id tác giả</th>
                    <th>Giá bìa</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ds_sach as $sach) {
                ?>
                    <tr>
                        <td><?php echo $sach->id ?></td>
                        <td><?php echo $sach->ten_sach ?></td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="trang_thai" value="<?= $sach->id ?>">
                                <button type="submit">
                                    <img src="assets/img/<?php echo ($sach->trang_thai) ? 'tick.ico' : 'delete.jpg' ?>" alt="">
                                </button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="POST">
                                <input type="hidden" name="noi_bat" value="<?= $sach->id ?>">
                                <button type="submit">
                                    <img src="assets/img/<?php echo ($sach->noi_bat) ? 'tick.ico' : 'ignore.png' ?>" alt="">
                                </button>
                            </form>
                        </td>
                        <td><?php echo $sach->gioi_thieu ?></td>
                        <td><?php echo $sach->id_tac_gia ?></td>
                        <td><?php echo $sach->gia_bia ?></td>
                        <td><?php echo $sach->trang_thai ?></td>


                        <td>
                            <a href="?page=sach&chuc_nang=update_sach&id_update=<?php echo $sach->id; ?>">
                                <button type="button" class="btn btn-info">
                                    Sửa
                                </button>
                            </a>

                            <a href="?page=sach&id_xoa=<?php echo $sach->id; ?>" onclick="return check_before_delete();">
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