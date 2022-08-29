<?php
class kasirModel extends CI_Model
{
    public function getMenu()
    {
        $this->db->select('id_menu,menu_name');
        $this->db->from('tbl_menu');
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getMenuByJenis($jenis_menu)
    {
        $this->db->select('id_menu,menu_name');
        $this->db->where('category', $jenis_menu);
        $this->db->where('status', 2);
        $this->db->from('tbl_menu');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getHargaMenu($id_menu)
    {
        $this->db->select('menu_price');
        $this->db->from('tbl_menu');
        $this->db->where('id_menu', $id_menu);
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function createLastNo($char)
    {
        $this->db->select('RIGHT(transaksi_code, 3) AS last_number');
        $this->db->from('tbl_transaksi');
        $this->db->LIMIT('1');
        $this->db->where('LEFT(transaksi_code,9)', $char);
        $this->db->order_by('tbl_transaksi.id_transaksi', 'DESC');
        $result = $this->db->get()->row_array();
        return $result;
    }
    // mengambil nama menu 
    public  function getMenuName($id_menu)
    {
        $this->db->select('menu_name');
        $this->db->from('tbl_menu');
        $this->db->where('id_menu', $id_menu);
        $query = $this->db->get()->row_array();
        return $query['menu_name'];
    }
    // insert data transaksi
    public function insertDataTransaksi($dataTransaksi)
    {
        if ($this->db->insert('tbl_transaksi', $dataTransaksi)) {
            return $this->db->insert_id();
            // mengambil id saat diinsert
        } else {
            return false;
        }
    }
    public function insertDataItemTransaksi($dataItemTransaksi)
    {
        if ($this->db->insert('tbl_item_transaksi', $dataItemTransaksi)) {
            return true;
        } else {
            return false;
        }
    }

    public function getRiwayatTransaksi($id_user)
    {
        $this->db->from('tbl_transaksi');
        $this->db->where('id_user', $id_user);
        $this->db->order_by('transaksi_code','DESC');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getDetailTransaksi($id_transaksi)
    {
        $this->db->select('tbl_menu.menu_name,tbl_menu.menu_price,tbl_item_transaksi.jumlah_pesanan');
        $this->db->from('tbl_item_transaksi');
        $this->db->join('tbl_transaksi', 'tbl_transaksi.id_transaksi=tbl_item_transaksi.id_transaksi');
        $this->db->join('tbl_menu', 'tbl_menu.id_menu=tbl_item_transaksi.id_menu');
        $this->db->where('tbl_transaksi.id_transaksi', $id_transaksi);
        $query = $this->db->get()->result_array();
        return $query;
    }
}
