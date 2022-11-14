<?php
include_once('../libaries/xl_don_hang.php');
include_once('../libaries/functions_support_view.php');

class c_don_hang
{
    private $xl_don_hang;
    function __construct()
    {
        $this->xl_don_hang = new xl_don_hang();
    }

    function index()
    {
        //echo '<pre>',print_r($_GET),'</pre>';
        if (isset($_GET['id_xoa'])) {

            // $sql = "DELETE FROM bs_loai_don_hang WHERE id = " . $_GET['id_xoa'];
            // $result = $dbh->exec($sql);

            $result = $this->xl_don_hang->delete_oder_from_list($_GET['id_xoa']);
        }

        //load  danh sách loại sách
        // $sql = "SELECT * FROM bs_loai_don_hang";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_loai_don_hang = $sth->fetchAll(PDO::FETCH_OBJ);
        // $ds_loai_don_hang = $Database->loadAllRow();

        $ds_oder = $this->xl_don_hang->load_all_oder_from_list();
        //echo '<pre>',print_r($ds_don_hang),'</pre>';


        // load view
        include_once('pages/ql_don_hang/index.php');
    }

    function them_don_hang()
    {

        if (isset($_POST['ma_don_hang'])) {

            $ma_don_hang = $_POST['ma_don_hang'];
            $tong_tien = $_POST['tong_tien'];
            $ngay_dat = $_POST['ngay_dat'];
            $id_nguoi_dung = $_POST['id_nguoi_dung'];
            $ho_ten_nguoi_nhan = $_POST['ho_ten_nguoi_nhan'];
            $email_nguoi_nhan = $_POST['email_nguoi_nhan'];
            $so_dien_thoai_nguoi_nhan = $_POST['so_dien_thoai_nguoi_nhan'];
            $trang_thai = (isset($_POST['trang_thai'])) ? 1 : 0;
            $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];

            // $sql = "INSERT INTO bs_don_hang(ten_don_hang,tong_tien,ngay_dat,id_nguoi_dung,ho_ten_nguoi_nhan,,email_nguoi_nhan,so_dien_thoai_nguoi_nhan,trang_thai,dia_chi_nguoi_nhan) VALUES('$ma_don_hang', '$tong_tien', '$ngay_dat', '$id_nguoi_dung', '$ho_ten_nguoi_nhan', '$email_nguoi_nhan', '$so_dien_thoai_nguoi_nhan', '$trang_thai', '$dia_chi_nguoi_nhan')";
            // $result = $dbh->exec($sql);

            $result = $this->xl_don_hang->add_don_hang_to_list($ma_don_hang, $tong_tien, $ngay_dat, $id_nguoi_dung, $ho_ten_nguoi_nhan, $email_nguoi_nhan, $so_dien_thoai_nguoi_nhan, $trang_thai, $dia_chi_nguoi_nhan);

            if ($result !== false) {
?>
                <!-- <script>
                    alert('successfully added book');
                    window.location.href('?page=' + <?php echo $_GET['page'] ?>);
                </script> -->
            <?php
            } else {
            ?>
                <!-- <script>
                    alert('add book failed, please check and try again');
                </script> -->
            <?php
            }
        }

        // load view
        include_once('pages/ql_don_hang/them_don_hang.php');
    }
    function sua_don_hang()
    {

        $id_update = '';
        if (isset($_GET['id_update'])) {
            $id_update = $_GET['id_update'];
        } else {

            go_to_pages('don-hang');
        }

        // $sql = "SELECT * FROM bs_don_hang WHERE id =" . $id_sua;
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $update_Book_Info = $sth->fetch(PDO::FETCH_OBJ);


        //echo '<pre>',print_r($_POST),'</pre>';

        if (isset($_POST['ma_don_hang'])) {
            
            $ma_don_hang = $_POST['ma_don_hang'];
            $tong_tien = $_POST['tong_tien'];
            $ngay_dat = $_POST['ngay_dat'];
            $id_nguoi_dung = $_POST['id_nguoi_dung'];
            $ho_ten_nguoi_nhan = $_POST['ho_ten_nguoi_nhan'];
            $email_nguoi_nhan = $_POST['email_nguoi_nhan'];
            $so_dien_thoai_nguoi_nhan = $_POST['so_dien_thoai_nguoi_nhan'];
            $trang_thai = (isset($_POST['trang_thai'])) ? 1 : 0;
            $dia_chi_nguoi_nhan = $_POST['dia_chi_nguoi_nhan'];

            // $sql = "UPDATE bs_don_hang SET ten_don_hang=$ten_don_hang, gioi_thieu=$gioi_thieu,  id_tac_gia=$id_tac_gia,trang_thai=$trang_thai WHERE id= $id_update";
            // $result = $dbh->exec($sql);
            $result = $this->xl_don_hang->update_don_hang_to_list($ma_don_hang, $tong_tien, $ngay_dat, $id_nguoi_dung, $ho_ten_nguoi_nhan, $email_nguoi_nhan, $so_dien_thoai_nguoi_nhan, $trang_thai, $dia_chi_nguoi_nhan);

            if ($result !== false) {
            ?>
                <script>
                    alert('Update order successfully');
                    window.location.href = '?page=' + '<?php echo $_GET['page'] ?>';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Update oder information failed, please try again');
                </script>
<?php
            }
        }



        // load view
        include_once('pages/ql_don_hang/sua_don_hang.php');
    }
}
