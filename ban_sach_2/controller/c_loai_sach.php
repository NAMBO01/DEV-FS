<?php
include_once('../libaries/xl_loai_sach.php');
include_once('../libaries/functions_support_view.php');

class c_loai_sach
{
    private  $xl_loai_sach;
    function __construct()
    {
        $this->xl_loai_sach = new xl_loai_sach();
    }

    function index()
    {

        //echo '<pre>',print_r($_GET),'</pre>';
        if (isset($_GET['id_xoa'])) {

            // $sql = "DELETE FROM bs_loai_sach WHERE id = " . $_GET['id_xoa'];
            // $result = $dbh->exec($sql);

            $result = $this->xl_loai_sach->delete_Book_Type_From_List($_GET['id_xoa']);
        }

        //load  danh sách loại sách
        // $sql = "SELECT * FROM bs_loai_sach";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_loai_sach = $sth->fetchAll(PDO::FETCH_OBJ);
        // $ds_loai_sach = $Database->loadAllRow();

        $ds_loai_sach = $this->xl_loai_sach->load_All_List_From_Book_Type();
        //echo '<pre>',print_r($ds_loai_sach),'</pre>';

        // load view
        include_once('pages/ql_loai_sach/index.php');
    }

    function them()
    {

        if (isset($_POST['ten_loai_sach'])) {
            $ten_loai_sach = $_POST['ten_loai_sach'];
            $id_loai_cha = $_POST['id_loai_cha'];
            $trang_thai = (isset($_POST['trang_thai'])) ? 1 : 0;

            // $sql = "INSERT INTO bs_loai_sach(ten_loai_sach, id_loai_cha, trang_thai)
            //         VALUES('$ten_loai_sach', '$id_loai_cha', '$trang_thai')";
            // $result = $dbh->exec($sql);

            $result = $this->xl_loai_sach->add_Book_Type_To_List($ten_loai_sach, $id_loai_cha, $trang_thai);
            if ($result !== false) {
            }
        }
?>

        <?php


        // $sql = "SELECT * FROM bs_loai_sach WHERE id_loai_cha = 0";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_loai_sach_cap_1 = $sth->fetchAll(PDO::FETCH_OBJ);

        $ds_loai_sach_cap_1 = $this->xl_loai_sach->load_All_List_From_Book_Type(0);
        //echo '<pre>',print_r($ds_loai_sach_cap_1),'</pre>';
        foreach ($ds_loai_sach_cap_1 as $loai_con_cap_1) {
            // $sql = "SELECT * FROM bs_loai_sach WHERE id_loai_cha = " . $loai_sach_cap_1->id;
            // $sth = $dbh->prepare($sql);
            // $sth->execute();
            // $ds_loai_sach_cap_2 = $Database->loadAllRow();
            $ds_loai_sach_cap_2 = $this->xl_loai_sach->load_All_List_From_Book_Type($loai_con_cap_1->id);
            $loai_con_cap_1->ds_loai_con = $ds_loai_sach_cap_2;
        }
        // load view
        include_once('pages/ql_loai_sach/them.php');
    }
    function sua_loai_sach()
    {
        $id_update = '';
        if (isset($_GET['id_update'])) {
            $id_update = $_GET['id_update'];
        } else {
            go_to_pages('loai-sach');
        }
        //$sql = "SELECT * FROM bs_loai_sach WHERE id =" . $id_sua;
        //$sth = $dbh->prepare($sql);
        //$sth->execute();
        //$update_Book_Type_Info = $sth->fetch(PDO::FETCH_OBJ);


        $update_Book_Type_Info = $this->xl_loai_sach->load_Book_Type_Info($id_update);
        //echo '<pre>',print_r($_POST),'</pre>';
        $info_loai_sach_sua = $this->xl_loai_sach->load_All_List_From_Book_Type($id_update);
        if (isset($_POST['ten_loai_sach'])) {
            $ten_loai_sach = $_POST['ten_loai_sach'];
            $id_loai_cha = $_POST['id_loai_cha'];
            $trang_thai = (isset($_POST['trang_thai'])) ? 1 : 0;

            // $sql = "UPDATE bs_loai_sach SET ten_loai_sach=$ten_loai_sach,SET id_loai_cha=$id_loai_cha,SET trang_thai=$trang_thai WHERE id= $id_update";
            // $result = $dbh->exec($sql);
            $result = $this->xl_loai_sach->update_Book_Type_To_List($ten_loai_sach, $id_loai_cha, $trang_thai, $id_update);
            if ($result !== false) {
            }
        }
        // $sql = "SELECT * FROM bs_loai_sach WHERE id_loai_cha = 0";
        // $sth = $dbh->prepare($sql);
        // $sth->execute();
        // $ds_loai_sach_cap_1 = $sth->fetchAll(PDO::FETCH_OBJ);

        $ds_loai_sach_cap_1 = $this->xl_loai_sach->load_All_List_From_Book_Type(0);

        // $Database->execute($sql);
        //echo '<pre>',print_r($ds_loai_sach_cap_1),'</pre>';

        foreach ($ds_loai_sach_cap_1 as $loai_sach_cap_1) {
            // $sql = "SELECT * FROM bs_loai_sach WHERE id_loai_cha = " . $loai_sach_cap_1->id;
            // $sth = $dbh->prepare($sql);
            // $sth->execute();
            // $Database->execute($sql);
            // $ds_loai_sach_cap_2 = $Database->loadAllRow();

            // $loai_sach_cap_1->ds_loai_con = $ds_loai_sach_cap_2;
            $ds_loai_sach_cap_2 = $this->xl_loai_sach->load_All_List_From_Book_Type($loai_sach_cap_1->id);
            $loai_sach_cap_1->ds_loai_con = $ds_loai_sach_cap_2;
        }
        
        // load view
        include_once('pages/ql_loai_sach/sua_loai_sach.php');
    }
}
