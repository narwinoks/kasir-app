<?php
class transaksiModel extends CI_Model
{
    // drop
    public function getIdUser()
    {
        $this->db->select('id_user,username');
        $this->db->where('level', 3);
        $this->db->from('tbl_users');
        $query = $this->db->get()->result_array();
        return $query;
    }


    public function getTrasaksiByUser($id_user)
    {
        return $this->db->get_where('tbl_transaksi', ['id_user' => $id_user])->result_array();
    }
    // detail transaksi
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
    public function getTrasaksiByTgl($tgl_awal, $tgl_ahir)
    {
        $this->db->select('*');
        $this->db->from('tbl_transaksi');
        $this->db->where('tbl_transaksi.tgl_transaksi >= ', $tgl_awal);
        $this->db->where('tbl_transaksi.tgl_transaksi <= ', $tgl_ahir);
        $query = $this->db->get()->result_array();
        return $query;
    }

    public function getSeluruhTransaksi()
    {
        return $this->db->get('tbl_transaksi')->result_array();
    }
}
