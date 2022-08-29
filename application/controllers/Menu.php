<?php
class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('menuModel');
        $this->load->model('logModel');
        $this->load->library('form_validation');
        if ($this->session->userdata('level') != 2) {
            redirect('auth');
        }
    }
    public function index()
    {
        if ($this->session->userdata('level'));
        // mengambil data dari database
        $data['menu'] = $this->menuModel->getMenu();
        // view daftar menu
        $data['content'] = 'menu/daftar_menu';
        $this->load->view('templates/main_view', $data);
    }
    public function tambah_menu()
    {
        // set form validation
        $this->form_validation->set_rules('nama_menu', 'nama', 'required');
        $this->form_validation->set_rules('jenis_menu', 'jenis', 'required');
        $this->form_validation->set_rules('harga_menu', 'harga', 'required');
        $data['content'] = 'menu/tambah_menu';
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
            'category'              => $this->input->post('jenis_menu'),
            'menu_name'             => $this->input->post('nama_menu'),
            'menu_price'            => $this->input->post('harga_menu'),
            'status'                => 2,
        ];
        $this->menuModel->insertdata($data);
        // set activty log
        $data = [
            'id_user'       => $this->session->userdata('id_user'),
            'log'           => 'menambahkan menu   ' . $data['menu_name'],
            'created_at'    =>  date("Y-m-d H:i:s"),
            'update_at'     =>  date("Y-m-d H:i:s")
        ];
        $this->logModel->addlog($data);

        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Menu Berhasil Ditambahkan !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('menu');
    }
    public function hapus_menu($id_menu)
    {
        $this->menuModel->hapusdata($id_menu);
        // set activty log
        $data = [
            'id_user'       => $this->session->userdata('id_user'),
            'log'           => 'meenghapus menu  dengan id  ' . $id_menu,
            'created_at'    =>  date("Y-m-d H:i:s"),
            'update_at'     =>  date("Y-m-d H:i:s")
        ];
        $this->logModel->addlog($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Menu Berhasil Dihapus!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('menu');
    }
    public function ubah_menu($id_menu)
    {
        $data['content']    = 'menu/ubah_menu';
        $data['menu']       = $this->menuModel->getmenubyid($id_menu);
        // set form validation
        $this->form_validation->set_rules('nama_menu', 'nama', 'required');
        $this->form_validation->set_rules('jenis_menu', 'jenis', 'required');
        $this->form_validation->set_rules('harga_menu', 'harga', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/main_view', $data);
        } else {
            $this->process_edit();
        }
    }

    public function process_edit()
    {
        $data = [
            'id_menu'               => $this->input->post("id_menu"),
            'category'              => $this->input->post('jenis_menu'),
            'menu_name'             => $this->input->post('nama_menu'),
            'menu_price'            => $this->input->post('harga_menu')
        ];
        $this->menuModel->updatedata($data);
        // set activty log
        $data = [
            'id_user'       => $this->session->userdata('id_user'),
            'log'           => 'mengubah  menu   ' . $data['menu_name'],
            'created_at'    =>  date("Y-m-d H:i:s"),
            'update_at'     =>  date("Y-m-d H:i:s")
        ];
        $this->logModel->addlog($data);
        $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        Data Menu Berhasil DiUbah!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>');
        redirect('menu');
    }
}
