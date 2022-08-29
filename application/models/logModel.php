<?php
class logModel extends CI_Model
{
    public function addlog($data)
    {
        if ($this->db->insert('tbl_log', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function getLog()
    {
        $this->db->select('tbl_users.username,tbl_users.name,tbl_log.log,tbl_log.created_at');
        $this->db->from('tbl_log');
        $this->db->join('tbl_users', 'tbl_log.id_user=tbl_users.id_user');
        $this->db->where('tbl_users.level', 3);
        $this->db->order_by('tbl_log.created_at', 'DESC');
        $query = $this->db->get()->result_array();
        return $query;
    }
}
