<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load form validation dan model
        $this->load->library('form_validation');
        $this->load->model('authModel');
    }
    public function index()
    {
        $data['content'] = 'home';
        $this->load->view('templates/main_view', $data);
    }
}
