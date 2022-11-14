<div class="row">
    <?php
    include_once('../libaries/functions_support_view.php');

    add_confirm_box_before_delete();
    if (isset($result)) {
        notice_after_process($result, 'Successfully deleted', 'An error occurred while deleting, please try again', 'sach');
    }

    ?>

    <!-- Page Header -->
    <div class="col-lg-12">
        <h1 class="page-header">Quản Lý Đơn Hàng</h1>
        <a href="?page=don-hang&chuc_nang=them-don-hang">
            <button type="button" class="btn btn-primary">Thêm đơn hàng mới</button>
        </a>
    </div>
    <!--End Page Header -->
    <div class="main_content">

        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Mã đơn hàng</th>
                        <th>tổng tiền</th>
                        <th>Ngày đặt</th>
                        <th>Họ tến người nhận</th>
                        <th>Email người nhận</th>
                        <th>Số điện thoại người nhận</th>
                        <th>Trạng thái</th>
                        <th>Địa chỉ người nhận</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($ds_order as $order) {
                    ?>
                        <tr>
                            <td><?php echo $order->id ?></td>
                            <td><?php echo $order->ma_don_hang ?></td>
                            <td><?php echo $order->tong_tien ?></td>
                            <td><?php echo $order->ngay_dat ?></td>
                            <td><?php echo $order->ho_ten_nguoi_nhan ?></td>
                            <td><?php echo $order->email_nguoi_nhan ?></td>
                            <td><?php echo $order->dia_chi_nguoi_nhan ?></td>

                            <td>
                                <a href="?page=don-hang&chuc_nang=update-tac-gia&id_update=<?php echo $order->id; ?>">
                                    <button type="button" class="btn btn-info">
                                        Sửa
                                    </button>
                                </a>

                                <a href="?page=don-hang&id_xoa=<?php echo $order->id; ?>" onclick="return check_before_delete();">
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