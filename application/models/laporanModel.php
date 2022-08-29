<?php
class laporanModel extends CI_Model
{
    public function getLaporanHarian($tgl_awal, $tgl_akhir)
    {
        return $this->db->query("SELECT  SUM(tbl_item_transaksi.jumlah_pesanan),tbl_menu.menu_price,tbl_menu.menu_name,tbl_item_transaksi.tgl_transaksi,tbl_item_transaksi.id_menu,COUNT(tbl_item_transaksi.id_menu),COUNT(tbl_item_transaksi.tgl_transaksi)  FROM tbl_item_transaksi JOIN tbl_menu ON tbl_menu.id_menu=tbl_item_transaksi.id_menu WHERE tbl_item_transaksi.tgl_transaksi BETWEEN '$tgl_awal' AND '$tgl_akhir' GROUP BY tbl_item_transaksi.id_menu,tbl_item_transaksi.tgl_transaksi HAVING COUNT(tbl_item_transaksi.id_menu) AND COUNT(tbl_item_transaksi.tgl_transaksi) ORDER BY tbl_item_transaksi.tgl_transaksi ASC")->result_array();
    }

    public function getLaporanBulanan($bulan)
    {
        return $this->db->query("SELECT SUM(tbl_item_transaksi.jumlah_pesanan),tbl_menu.menu_price,tbl_menu.menu_name,tbl_item_transaksi.tgl_transaksi,tbl_item_transaksi.id_menu,COUNT(tbl_item_transaksi.id_menu),COUNT(tbl_item_transaksi.tgl_transaksi)  FROM tbl_item_transaksi JOIN tbl_menu ON tbl_menu.id_menu=tbl_item_transaksi.id_menu WHERE MID(tbl_item_transaksi.tgl_transaksi,6,2)='$bulan' GROUP BY tbl_item_transaksi.id_menu,tbl_item_transaksi.tgl_transaksi HAVING COUNT(tbl_item_transaksi.id_menu) AND COUNT(tbl_item_transaksi.tgl_transaksi) ORDER BY tbl_item_transaksi.tgl_transaksi ASC")->result_array();
    }
}
