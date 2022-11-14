<?php
include_once('../libaries/xl_sach.php');
include_once('../libaries/functions_support_view.php');

class c_sach
{
    private $xl_sach;
    function __construct()
    {
        $this->xl_sach = new xl_sach();
    }

    function index()
    {
        //echo '<pre>',print_r($_GET),'</pre>';
        if (isset($_GET['id_xoa'])) {

            // $sql = "DELETE FROM bs_loai_sach WHERE id = " . $_GET['id_xoa'];
            // $result = $dbh->exec($sql);

            $result = $this->xl_sach->delete_Book_From_List($_GET['id_xoa']);
        }

        //load  danh sách loại sách
        // $sql = "SELECT * FROM bs_loai_sach";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_loai_sach = $sth->fetchAll(PDO::FETCH_OBJ);
        // $ds_loai_sach = $Database->loadAllRow();

        $ds_sach = $this->xl_sach->load_All_List_From_Book();
        //echo '<pre>',print_r($ds_loai_sach),'</pre>';


        // load view
        include_once('pages/ql_sach/index.php');
    }

    function them_sach()
    {

        if (isset($_POST['ten_sach'])) {

            $ten_sach = $_POST['ten_sach'];
            $gioi_thieu = $_POST['gioi_thieu'];
            $id_tac_gia = $_POST['id_tac_gia'];
            $gia_bia = $_POST['gia_bia'];
            $trang_thai = (isset($_POST['trang_thai'])) ? 1 : 0;

            // $sql = "INSERT INTO bs_sach(ten_sach,gioi_thieu,id_tac_gia,gia_bia,trang_thai) VALUES('$ten_sach', '$gioi_thieu', '$id_tac_gia', '$gia_bia', '$trang_thai')";
            // $result = $dbh->exec($sql);

            $result = $this->xl_loai_sach->add_Book_To_List($ten_sach, $gioi_thieu, $id_tac_gia, $gia_bia, $trang_thai);

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
        include_once('pages/ql_sach/them_sach.php');
    }
    function sua_sach()
    {

        $id_update = '';
        if (isset($_GET['id_update'])) {
            $id_update = $_GET['id_update'];
        } else {
        
           go_to_pages('sach');
        
        }
        
        // $sql = "SELECT * FROM bs_sach WHERE id =" . $id_sua;
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $update_Book_Info = $sth->fetch(PDO::FETCH_OBJ);
        
        
        //echo '<pre>',print_r($_POST),'</pre>';

        if (isset($_POST['ten_sach'])) {
            $ten_sach = $_POST['ten_sach'];
            $gioi_thieu = $_POST['gioi_thieu'];
            $id_tac_gia = $_POST['id_tac_gia'];
            $gia_bia = $_POST['gia_bia'];
            $trang_thai = (isset($_POST['trang_thai'])) ? 1 : 0;
        
            // $sql = "UPDATE bs_sach SET ten_sach=$ten_sach, gioi_thieu=$gioi_thieu,  id_tac_gia=$id_tac_gia,trang_thai=$trang_thai WHERE id= $id_update";
            // $result = $dbh->exec($sql);
            $result=$this->xl_loai_sach->update_Book_To_List($ten_sach, $gioi_thieu, $id_tac_gia, $trang_thai);
        
            if ($result !== false) {
        ?>
                <script>
                    alert('Update book type information successfully');
                    window.location.href = '?page=' + '<?php echo $_GET['page'] ?>';
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert('Update of book type information failed, please try again');
                </script>
        <?php
            }
        }
       
        
        
        // load view
        include_once('pages/ql_sach/sua_sach.php');
    }
}
