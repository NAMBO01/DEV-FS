<?php
include_once('../libaries/Database.php');
class xl_tac_gia extends Database
{
    function load_All_List_From_Tac_Gia()
    {
        $sql = "SELECT * FROM bs_tac_gia";
        $this->setQuery($sql);
        $ds_tac_gia = $this->loadAllRow();
        return $ds_tac_gia;
    }
    function load_Tac_Gia_Info($id_update)
    {
        $sql = "SELECT * FROM bs_tac_gia WHERE id =" . $id_update;
        $this->setQuery($sql);
        $update_tac_gia_Info = $this->loadRow();
        return $update_tac_gia_Info;
    }
    function add_Tac_Gia_To_List($ten_tac_gia, $ngay_sinh, $gioi_thieu)
    {
        $sql = "INSERT INTO bs_tac_gia(ten_tac_gia, ngay_sinh, gioi_thieu) VALUES('?','?','?')";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_tac_gia, $ngay_sinh, $gioi_thieu));
        return $result;
    }
    function update_Tac_Gia_To_List($ten_tac_gia, $ngay_sinh, $gioi_thieu)
    {
        $sql = "UPDATE bs_tac_gia SET ten_tac_gia=?, ngay_sinh=?,  gioi_thieu=?  WHERE id= ?";
        $this->setQuery($sql);
        $result = $this->execute(array($ten_tac_gia, $ngay_sinh, $gioi_thieu));
        return $result;
    }
    function delete_Tac_Gia_From_List($id_xoa)
    {
        $sql = "DELETE FROM bs_tac_gia WHERE id=" . $_GET['id_xoa'];
        $this->setQuery($sql);
        $result = $this->execute();
        return $result;
    }
}
