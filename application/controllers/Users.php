<?php
class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('usersModel');
        $this->load->model('logModel');
        $this->load->library('form_validation');
         
        // set privilese
        if ($this->session->userdata('level') != 1) {
            redirect('auth');
        }

    }
    public function index()
    {
        // mengambil data dari database
        $data['users'] = $this->usersModel->getUsers();
        // view daftar menu
        $data['content'] = 'users/daftar_user';
        $this->load->view('templates/main_view', $data);
    }
    public function tambah_users()
    {
        // set form validation
        $this->form_validation->set_rules('name', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('level_user', 'level', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $data['content'] = 'users/tambah_user';
        if ($this->form_validation->run() == false) {
            // memanggil view
            $this->load->view('templates/main_view', $data);
        } else {
            $this->processadd();
        }
    }

    public function processadd()
    {
        $data = [
            'name'                  => $this->input->post('name'),
            'username'              => $this->input->post('username'),
            'password'              => md5($this->input->post('password')),
            'level'                 => $this->input->post('level_user'),
            'status'                =>2
        ];
        $this->usersModel->insertdata($data);
        // set activty log
        $data = [
            'id_user'       => $this->session->userdata('id_user'),
            'log'           => 'menambahkan users   ' . $data['name'],
            'created_at'    =>  date("Y-m-d H:i:s"),
            'update_at'     =>  date("Y-m-d H:i:s")
        ];
        $this->logModel->addlog($data);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Menu Berhasil Ditambahkan !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('users');
    }
    public function hapus_users($id_user)
    {
        $this->usersModel->hapusdata($id_user);
        // set activty log
        $data = [
            'id_user'       => $this->session->userdata('id_user'),
            'log'           => 'meenghapus menu  dengan id  ' . $id_user,
            'created_at'    =>  date("Y-m-d H:i:s"),
            'update_at'     =>  date("Y-m-d H:i:s")
        ];
        $this->logModel->addlog($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Menu Berhasil Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('users');
    }
    public function ubah_users($id_user)
    {
        $data['content']    = 'users/ubah_user';
        $data['users']      = $this->usersModel->getusersbyid($id_user);
        // set form validation
        $this->form_validation->set_rules('name', 'nama', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('level_user', 'level', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/main_view', $data);
        } else {
            $this->process_edit();
        }
    }

    public function process_edit()
    {
        // ubah data users
        $data = [
            'id_user'              => $this->input->post('id_user'),
            'name'                  => $this->input->post('name'),
            'username'              => $this->input->post('username'),
            'password'              => md5($this->input->post('password')),
            'level'                 => $this->input->post('level_user'),
        ];
        $this->usersModel->updatedata($data);
        // set activty log
        $data = [
            'id_user'       => $this->session->userdata('id_user'),
            'log'           => 'mengubah  users   ' . $data['menu_name'],
            'created_at'    =>  date("Y-m-d H:i:s"),
            'update_at'     =>  date("Y-m-d H:i:s")
        ];
        $this->logModel->addlog($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Users Berhasil DiUbah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('users');
    }
}
