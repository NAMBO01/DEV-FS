<?php
include_once('../libaries/xl_tac_gia.php');
include_once('../libaries/functions_support_view.php');

class c_tac_gia
{
    private  $xl_tac_gia;
    function __construct()
    {
        $this->xl_tac_gia = new xl_tac_gia();
    }

    function index()
    {

        //echo '<pre>',print_r($_GET),'</pre>';
        if (isset($_GET['id_xoa'])) {

            // $sql = "DELETE FROM bs_tac_gia WHERE id = " . $_GET['id_xoa'];
            // $result = $dbh->exec($sql);

            $result = $this->xl_tac_gia->delete_Tac_Gia_From_List($_GET['id_xoa']);
        }

        //load  danh sách loại sách
        // $sql = "SELECT * FROM bs_tac_gia";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_tac_gia = $sth->fetchAll(PDO::FETCH_OBJ);
        // $ds_tac_gia = $Database->loadAllRow();

        $ds_tac_gia = $this->xl_tac_gia->load_All_List_From_Tac_Gia();
        //echo '<pre>',print_r($ds_tac_gia),'</pre>';

        // load view
        include_once('pages/ql_tac_gia/index.php');
    }

    function them()
    {

        if (isset($_POST['ten_tac_gia'])) {
            $ten_tac_gia = $_POST['ten_tac_gia'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $gioi_thieu = $_POST['gioi_thieu'];

            // $sql = "INSERT INTO bs_tac_gia(ten_tac_gia, ngay_sinh, gioi_thieu)
            //         VALUES('$ten_tac_gia', '$ngay_sinh', '$gioi_thieu')";
            // $result = $dbh->exec($sql);

            $result = $this->xl_tac_gia->add_Tac_Gia_To_List($ten_tac_gia,$ngay_sinh,$gioi_thieu);
            if ($result !== false) {
            }
        }
?>

        <?php


        // $sql = "SELECT * FROM bs_tac_gia WHERE id_loai_cha = 0";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_tac_gia_cap_1 = $sth->fetchAll(PDO::FETCH_OBJ);

        
        // load view
        include_once('pages/ql_tac_gia/them.php');
    }
    function sua_tac_gia()
    {
        $id_update = '';
        if (isset($_GET['id_update'])) {
            $id_update = $_GET['id_update'];
        } else {
            go_to_pages('tac-gia');
        }
        //$sql = "SELECT * FROM bs_tac_gia WHERE id =" . $id_sua;
        //$sth = $dbh->prepare($sql);
        //$sth->execute();
        //$update_Tac_Gia_Info = $sth->fetch(PDO::FETCH_OBJ);


        $update_tac_gia_Info = $this->xl_tac_gia->load_Tac_Gia_Info($id_update);
        //echo '<pre>',print_r($_POST),'</pre>';
        $info_tac_gia_sua = $this->xl_tac_gia->load_All_List_From_Tac_Gia($id_update);
        if (isset($_POST['ten_tac_gia'])) {
            $ten_tac_gia = $_POST['ten_tac_gia'];
            $ngay_sinh = $_POST['ngay_sinh'];
            $gioi_thieu = $_POST['gioi_thieu'];
           

            // $sql = "UPDATE bs_tac_gia SET ten_tac_gia=$ten_tac_gia,SET id_loai_cha=$id_loai_cha,SET trang_thai=$trang_thai WHERE id= $id_update";
            // $result = $dbh->exec($sql);
            $result = $this->xl_tac_gia->update_Tac_Gia_To_List($ten_tac_gia,$ngay_sinh,$gioi_thieu);
            if ($result !== false) {
            }
        }
        // $sql = "SELECT * FROM bs_tac_gia WHERE id_loai_cha = 0";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_tac_gia_cap_1 = $sth->fetchAll(PDO::FETCH_OBJ);

        

       
        
        // load view
        include_once('pages/ql_tac_gia/update_info_tac_gia.php');
    }
}
