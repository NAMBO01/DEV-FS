<?php
include_once('../libaries/Database.php');
class xl_nha_xuat_ban extends Database
{

    function load_all_nxb_from_list()
    {
        $sql = "SELECT * FROM bs_nha_xuat_ban";
        $this->setQuery($sql);
        $ds_sach = $this->loadAllRow();
        return $ds_sach;
    }
    function add_nxb_to_list($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email)
    {
        $sql = "INSERT INTO bs_nha_xuat_ban(ten_nha_xuat_ban, dia_chi, dien_thoai, email) VALUES('?','?','?','?')";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email));
        return $result;
    }
    function update_nxb_to_List($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email, $id_update)
    {
        $sql = "UPDATE bs_nha_xuat_ban SET ten_sach=?, gioi_thieu=?,  id_tac_gia=? , trang_thai=?  WHERE id= ?";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_nha_xuat_ban, $dia_chi, $dien_thoai, $email, $id_update));
        return $result;
    }
    function delete_nxb_from_list($id_xoa)
    {
        $sql = "DELETE FROM bs_nha_xuat_ban WHERE id=" . $_GET['id_xoa'];
        $this->setQuery($sql);
        $result = $this->execute();
        return $result;
    }
}
