
<?php
include_once('../libaries/Database.php');
class xl_loai_sach extends Database
{

   
    function load_All_List_From_Book_Type($id_loai_cha = false)
    {
        $sql = "SELECT * FROM bs_loai_sach";
        if ($id_loai_cha !== false) {
            $sql = "SELECT * FROM bs_loai_sach";
        }
        $this->setQuery($sql);
        $ds_loai_sach = $this->loadAllRow();
        return $ds_loai_sach;
    }
    function load_Book_Type_Info($id_update)
    {
        $sql = "SELECT * FROM bs_loai_sach WHERE id =" . $id_update;
        $this->setQuery($sql);
        $update_Book_Type_Info = $this->loadRow();
        return $update_Book_Type_Info;
    }

   
    
   
    function load_all_tac_gia_from_list()
    {
        $sql = "SELECT * FROM bs_tac_gia";
        $this->setQuery($sql);
        $ds_sach = $this->loadAllRow();
        return $ds_sach;
    }
    
    function add_Book_Type_To_List($ten_loai_sach, $id_loai_cha, $trang_thai)
    {
        $sql = "INSERT INTO bs_loai_sach(ten_loai_sach, id_loai_cha, trang_thai) VALUES('?','?','?')";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_loai_sach, $id_loai_cha, $trang_thai));
        return $result;
    }
    
    function add_tac_gia_to_list($ten_tac_gia, $ngay_sinh, $gioi_thieu)
    {
        $sql = "INSERT INTO bs_nha_xuat_ban(ten_tac_gia, ngay_sinh, gioi_thieu) VALUES('?','?','?')";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_tac_gia, $ngay_sinh, $gioi_thieu));
        return $result;
    }
    function update_Book_Type_To_List($ten_loai_sach, $id_loai_cha, $trang_thai, $id_update)
    {
        $sql = "UPDATE bs_loai_sach SET ten_loai_sach = ? , id_loai_cha=?, trang_thai=? WHERE id=?";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_loai_sach, $id_loai_cha, $trang_thai, $id_update));
        return $result;
    }

    
    function update_tac_gia_to_List($ten_tac_gia, $ngay_sinh, $gioi_thieu, $id_update)
    {
        $sql = "UPDATE bs_sach SET ten_sach=?, gioi_thieu=?,  id_tac_gia=? , trang_thai=?  WHERE id= ?";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_tac_gia, $ngay_sinh, $gioi_thieu, $id_update));
        return $result;
    }
   
    function delete_Book_Type_From_List($id_xoa)
    {
        $sql = "DELETE FROM bs_loai_sach WHERE id=" . $_GET['id_xoa'];
        $this->setQuery($sql);
        $result = $this->execute();
        return $result;
    }
    
   
    function delete_tac_gia_from_list($id_xoa)
    {
        $sql = "DELETE FROM bs_tac_gia WHERE id=" . $_GET['id_xoa'];
        $this->setQuery($sql);
        $result = $this->execute();
        return $result;
    }
}
