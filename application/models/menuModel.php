<?php
class menuModel extends CI_Model
{
    public function getMenu()
    {
        $this->db->from('tbl_menu');
        $this->db->where('status', 2);
        $this->db->order_by('id_menu','DESC');
        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getmenubyid($id_menu)
    {
        $this->db->where('id_menu', $id_menu);
        $this->db->from('tbl_menu');
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function insertdata($data)
    {
        if ($this->db->insert('tbl_menu', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function hapusdata($id_menu)
    {
        $this->db->where('id_menu', $id_menu);
        $query = $this->db->update('tbl_menu', ['status' => 0]);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function updatedata($data)
    {
        $this->db->where('id_menu', $data['id_menu']);
        $query = $this->db->update('tbl_menu', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
