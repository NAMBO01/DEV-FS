<?php
include_once('../libaries/Database.php');
class xl_don_hang extends Database
{
    function load_all_oder_from_list()
    {
        $sql = "SELECT * FROM bs_don_hang";
        $this->setQuery($sql);
        $ds_order = $this->loadAllRow();
        return $ds_order;
    }
    function load_oder_Info($id_update)
    {
        $sql = "SELECT * FROM bs_don_hang WHERE id =" . $id_update;
        $this->setQuery($sql);
        $update_oder_Info = $this->loadRow();
        return $update_oder_Info;
    }
    function add_don_hang_to_list($ma_don_hang, $tong_tien, $ngay_dat, $id_nguoi_dung, $ho_ten_nguoi_nhan, $email_nguoi_nhan, $so_dien_thoai_nguoi_nhan, $trang_thai, $dia_chi_nguoi_nhan)
    {
        $sql = "INSERT INTO bs_don_hang(ma_don_hang,tong_tien,ngay_dat,id_nguoi_dung,ho_ten_nguoi_nhan,email_nguoi_nhan,so_dien_thoai_nguoi_nhan,trang_thai,dia_chi_nguoi_nhan) VALUES('?','?','?','?','?','?','?','?','?')";
        $this->setQuery($sql);
        $result = $this->execute(array($ma_don_hang, $tong_tien, $ngay_dat, $id_nguoi_dung, $ho_ten_nguoi_nhan, $email_nguoi_nhan, $so_dien_thoai_nguoi_nhan, $trang_thai, $dia_chi_nguoi_nhan));
        return $result;
    }
    function update_don_hang_to_list($ma_don_hang, $tong_tien, $ngay_dat, $id_nguoi_dung, $ho_ten_nguoi_nhan, $email_nguoi_nhan, $so_dien_thoai_nguoi_nhan, $trang_thai, $dia_chi_nguoi_nhan)
    {
        $sql = "UPDATE bs_don_hang SET ten_don_hang=?, gioi_thieu=?,  id_tac_gia=? , trang_thai=?  WHERE id= ?";
        $this->setQuery($sql);
        $result = $this->execute(array($ma_don_hang, $tong_tien, $ngay_dat, $id_nguoi_dung, $ho_ten_nguoi_nhan, $email_nguoi_nhan, $so_dien_thoai_nguoi_nhan, $trang_thai, $dia_chi_nguoi_nhan));
        return $result;
    }
    function delete_oder_from_list($id_xoa)
    {
        $sql = "DELETE FROM bs_don_hang WHERE id=" . $_GET['id_xoa'];
        $this->setQuery($sql);
        $result = $this->execute();
        return $result;
    }
}
