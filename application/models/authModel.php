<?php
class authModel extends CI_Model
{
    public function getUsers($username)
    {
        $this->db->where('status', 2);
        return  $this->db->get_where('tbl_users', ['username' => $username])->row_array();
    }

    public function getProfile($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->select('id_user,username,level,name');
        $this->db->from('tbl_users');
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function ubahProfile($data)
    {
        $this->db->where('id_user', $data['id_user']);
        $query = $this->db->update('tbl_users', $data);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getPasswordLama($id_user)
    {
        $this->db->where('id_user', $id_user);
        $this->db->select('password');
        $this->db->from('tbl_users');
        $query = $this->db->get()->row_array();
        return $query;
    }
    public function ubahPassword($data)
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
