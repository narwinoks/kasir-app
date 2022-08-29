<?php
// controller yang menangani login proses
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load form validation dan model
        $this->load->library('form_validation');
        $this->load->model('authModel');
        $this->load->model('logModel');
    }
    public function index()
    {
        //harus logout
        if ($this->session->userdata('level')) {
            redirect('home');
        }
        // set form validation
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('Auth/login');
        } else {
            // jika lolos form validation
            $this->proses_login();
        }
    }

    public function proses_login()
    {
        // ambil data dari form
        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        // ambil data dari database
        $auth = $this->authModel->getUsers($username);
        // jika users ada
        if ($auth) {
            // jika password benar
            if ($password == $auth['password']) {
                $data = [
                    'id_user' => $auth['id_user'],
                    'name' => $auth['name'],
                    'level' => $auth['level']
                ];
                // set session
                $this->session->set_userdata($data);
                // set activty log
                $data = [
                    'id_user'       => $this->session->userdata('id_user'),
                    'log'           => 'login sukses ',
                    'created_at'    =>  date("Y-m-d H:i:s"),
                    'update_at'     =>  date("Y-m-d H:i:s")
                ];
                $this->logModel->addlog($data);
                // set level
                // if ($auth['level'] == 1) {
                //     echo "admin";
                // } elseif ($auth['level'] == 2) {
                //     redirect('Manager');
                // } else {
                //    redirect('kasir');
                // }
                redirect('home');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
               Maaf  password anda salah
              </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
           Maaf Username anda salah
          </div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        // set activty log
        $data = [
            'id_user'       => $this->session->userdata('id_user'),
            'log'           => 'logout sukses',
            'created_at'    =>  date("Y-m-d H:i:s"),
            'update_at'     =>  date("Y-m-d H:i:s")
        ];
        $this->logModel->addlog($data);

        $this->session->sess_destroy();
        redirect('auth');
    }
    // fitur bonus
    public function profile()
    {
        $id_user         = $this->session->userdata('id_user');
        $data['users']   = $this->authModel->getProfile($id_user);
        $data['content'] = 'auth/profile';
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('name', 'name', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/main_view', $data);
        } else {
            $this->prosesUbahprofile();
        }
    }
    public function prosesUbahprofile()
    {
        $data = [
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
            'name' => $this->input->post('name')
        ];

        $this->authModel->ubahProfile($data);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Profile Sukses Diubah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('Auth/profile');
    }
    public function ubahPassword()
    {
        $data['content'] = 'auth/ubah_password';
        $this->form_validation->set_rules('password_lama', 'Password Lama', 'required');
        $this->form_validation->set_rules('password_baru', 'Password Baru', 'required');
        $this->form_validation->set_rules('konfirmasi_password', 'Konfirmasi_pasword', 'required|matches[password_baru]');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/main_view', $data);
        } else {
            $this->prosesUbahPassword();
        }
    }

    public function prosesUbahPassword()
    {
        // ambil data password lama
        $passwordLama   = md5($this->input->post('password_lama'));
        // data yang akan disimoan
        $data = [
            'password'  => md5($this->input->post('password_baru')),
            'id_user'   => $this->input->post('id_user')
        ];
        // id_user
        $id_user        = $this->session->userdata('id_user');
        // ambil password lama dari db
        $db_password    = $this->authModel->getPasswordLama($id_user);
        if ($db_password['password'] == $passwordLama) {
            $this->authModel->ubahPassword($data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-info alert-dismissible fade show" role="alert">
            Password Sukses Diubah  !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('auth/ubahPassword');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            Maaf Password Lama Anda Salah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
            redirect('auth/ubahPassword');
        }
    }
}
