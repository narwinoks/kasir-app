<?php
class logActivity extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('logModel');
        // set privilese
        if ($this->session->userdata('level') == 3) {
            redirect('auth');
        }
    }
    public function index()
    {

        $data['log'] = $this->logModel->getLog();
        $data['content'] = 'log/daftar_log';
        $this->load->view('templates/main_view', $data);
    }
}
