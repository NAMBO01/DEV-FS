<?php




$page = isset($_GET['page']) ? $_GET['page'] : "";
$chuc_nang = isset($_GET['chuc_nang']) ? $_GET['chuc_nang'] : "";
?>
<!DOCTYPE html>
<html>

<?php
include_once('widgets/head.php');
?>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <?php
        include_once('widgets/header.php');
        ?>

        <?php
        include_once('widgets/sidebar.php');
        ?>


        <!--  page-wrapper -->
        <div id="page-wrapper">


            <?php
            if ($page == 'loai-sach') {

                include_once('../controller/c_loai_sach.php');
                $controller = new c_loai_sach();
                if ($chuc_nang == 'them') {
                    $controller->them();
                } else if ($chuc_nang == 'update') {
                    $controller->sua_loai_sach();
                } else {
                    $controller->index();
                }
            } else if ($page == 'sach') {
                include_once('../controller/c_sach.php');
                $controller = new c_sach();
                if ($chuc_nang == 'them_sach') {
                    $controller->them_sach();
                } else if ($chuc_nang == 'update_sach') {
                    $controller->sua_sach();
                } else {
                    $controller->index();
                }
            } else if ($page == 'nha-xuat-ban') {
                include_once('../controller/c_nha_xuat_ban.php');
                $controller = new c_nha_xuat_ban();
                if ($chuc_nang == 'them-nha-xuat-ban') {
                    $controller->add_nxb();
                } else if ($chuc_nang == 'update-nha-xuat-ban') {
                    $controller->update_nxb();
                } else {
                    $controller->index();
                }
            } else if ($page == 'tac-gia') {
                include_once('../controller/c_tac_gia.php');
                $controller = new c_tac_gia();
                if ($chuc_nang == 'tac-gia') {
                    $controller->them();
                } else if ($chuc_nang == 'tac-gia') {
                    $controller->sua_tac_gia();
                } else {
                    $controller->index();
                }
            } else if ($page == 'don-hang') {
                include_once('../controller/c_don_hang.php');
                $controller = new c_don_hang();
                if ($chuc_nang == 'don-hang') {
                    $controller->them_don_hang();
                } else if ($chuc_nang == 'don-hang') {
                    $controller->sua_don_hang();
                } else {
                    $controller->index();
                }
            } else {
                include_once('pages/thong_ke/index.php');
            }
            ?>
        </div>



    </div>
    <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>

</body>

</html>