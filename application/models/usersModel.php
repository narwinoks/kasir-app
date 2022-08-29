<?php
class usersModel extends CI_Model
{
    public function getUsers()
    {
        // ambil data user yang tidak administrator
        $this->db->where('level!=', 1);
        $this->db->where('status', 2);
        $query = $this->db->get('tbl_users')->result_array();
        return $query;
    }
    public function getusersbyid($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->from('tbl_users');
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function insertdata($data)
    {
        if ($this->db->insert('tbl_users', $data)) {
            return true;
        } else {
            return false;
        }
    }

    public function hapusdata($id_user)
    {
        $this->db->where('id_user', $id_user);
        $query = $this->db->update('tbl_users', ['status' => 0]);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    public function updatedata($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $query = $this->db->update('tbl_users', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
}
