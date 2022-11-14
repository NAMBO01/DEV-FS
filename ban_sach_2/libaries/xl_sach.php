<?php
include_once('../libaries/Database.php');
class xl_sach extends Database
{
    function load_All_List_From_Book()
    {
        $sql = "SELECT * FROM bs_sach";
        $this->setQuery($sql);
        $ds_sach = $this->loadAllRow();
        return $ds_sach;
    }
    function load_Book_Info($id_update)
    {
        $sql = "SELECT * FROM bs_sach WHERE id =" . $id_update;
        $this->setQuery($sql);
        $update_Book_Info = $this->loadRow();
        return $update_Book_Info;
    }
    function add_Book_To_List($ten_sach, $gioi_thieu, $id_tac_gia, $gia_bia, $trang_thai)
    {
        $sql = "INSERT INTO bs_sach(ten_sach,gioi_thieu,id_tac_gia,gia_bia,trang_thai) VALUES('?','?','?','?','?')";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_sach, $gioi_thieu, $id_tac_gia, $gia_bia, $trang_thai));
        return $result;
    }
    function update_Book_To_List($ten_sach, $gioi_thieu, $id_tac_gia, $trang_thai, $id_update)
    {
        $sql = "UPDATE bs_sach SET ten_sach=?, gioi_thieu=?,  id_tac_gia=? , trang_thai=?  WHERE id= ?";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_sach, $gioi_thieu, $id_tac_gia, $trang_thai, $id_update));
        return $result;
    }
    function delete_Book_From_List($id_xoa)
    {
        $sql = "DELETE FROM bs_sach WHERE id=" . $_GET['id_xoa'];
        $this->setQuery($sql);
        $result = $this->execute();
        return $result;
    }
}
