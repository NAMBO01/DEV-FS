<?php
include_once('../libaries/xl_nha_xuat_ban.php');
include_once('../libaries/functions_support_view.php');

class  c_nha_xuat_ban
{
    private $xl_nha_xuat_ban;

    function __construct()
    {
        $this->xl_nha_xuat_ban = new xl_nha_xuat_ban();
    }
    function index()
    {

        $dbh = new PDO('mysql:host=localhost;dbname=ban_sach_online_db;charset=utf8', 'root', '');
        if (isset($_GET['id_xoa'])) {
            // $sql = 'DELETE FROM bs_sach WHERE id_xoa = ' . $_GET['id_xoa'];
            // $result = $dbh->exec($sql);

            $result = $this->xl_loai_sach->delete_nxb_from_list($_GET['id_xoa']);

            if ($result !== false) {
            }
        }
        // $sql = "SELECT * FROM bs_sach ";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_sach = $sth->fetchAll(PDO::FETCH_OBJ);

        $ds_nxb = $this->xl_nha_xuat_ban->load_all_nxb_from_list();

        //load view
        include_once('pages/ql_nxb/index.php');
    }

    function add_nxb()
    {

        if (isset($_POST['ten_nha_xuat_ban'])) {

            $ten_nha_xuat_ban = $_POST['ten_nha_xuat_ban'];
            $dia_chi = $_POST['dia_chi'];
            $dien_thoai = $_POST['dien_thoai'];
            $email = $_POST['email'];


            // $sql = "INSERT INTO bs_sach(ten_nha_xuat_ban, dia_chi, dien_thoai, email) VALUES('$ten_nha_xuat_ban', '$dia_chi', '$dien_thoai', '$email')";
            // $result = $dbh->exec($sql);

            $result = $this->xl_nha_xuat_ban->add_nxb_to_list($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email);

            if ($result !== false) {
?>
                <!-- <script>
                    alert('Successfully added publisher ');
                    window.location.href('?page=' + <?php echo $_GET['page'] ?>);
                </script> -->
            <?php
            } else {
            ?>
                <!-- <script>
                    alert('add publisher failed, please check and try again');
                </script> -->
            <?php
            }
        }

        //load view
        include_once('pages/ql_nxb/add_nxb.php');
    }

    function update_nxb()
    {
        $id_update = '';
        if (isset($_GET['id_update'])) {
            $id_update = $_GET['id_update'];
        } else {
            ?>
            <script>
                go_to_pages('nha-xuat-ban')
            </script>
            <?php
        }

        // $sql = "SELECT * FROM bs_sach WHERE id =" . $id_sua;
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $update_Book_Info = $sth->fetch(PDO::FETCH_OBJ);

        $update_info_nxb = $this->xl_nha_xuat_ban->load_all_nxb_from_list();

        //echo '<pre>',print_r($_POST),'</pre>';

        if (isset($_POST['ten_nha_xuat_ban'])) {
            $ten_nha_xuat_ban = $_POST['ten_nha_xuat_ban'];
            $dia_chi = $_POST['dia_chi'];
            $dien_thoai = $_POST['dien_thoai'];
            $email = $_POST['email'];


            // $sql = "UPDATE bs_nha_xuat_ban SET ten_nha_xuat_ban=$ten_nha_xuat_ban, dia_chi=$dia_chi, dien_thoai=$dien_thoai,email=$email WHERE id= $id_update";
            // $result = $dbh->exec($sql);
            $result = $this->xl_nha_xuat_ban->update_nxb_to_List($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email, $id_update);

            if ($result !== false) {
            ?>
                <script>
                    alert('Update publisher successfully');
                    window.location.href = '?page=' + '<?php echo $_GET['page'] ?>';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Update publisher information failed, please try again');
                </script>
<?php
            }
        }

        //load view
        include_once('pages/ql_nxb/update_nxb.php');
    }
}
