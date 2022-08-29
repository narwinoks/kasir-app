<?php
class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load form  dan model
        $this->load->model('transaksiModel');
        $this->load->model('logModel');
        // set privilese
        if ($this->session->userdata('level') != 2) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['id_user']    = $this->transaksiModel->getIdUser();
        $data['content']    = 'transaksi/riwayat_transaksi';
        $this->load->view('templates/main_view', $data);
    }

    public function getTrasaksiByUser()
    {
        $this->session->unset_userdata('transaksi');
        $id_user           = $this->input->post('id_user');
        $transaksi         = $this->transaksiModel->getTrasaksiByUser($id_user);
        if ($transaksi) {
            $this->session->set_userdata('transaksi', $transaksi);
            redirect('transaksi');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Transaksi Kosong
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('transaksi');
        }
    }

    public function detailTransaksi($id_transaksi)
    {
        $data['detail_transaksi'] = $this->transaksiModel->getDetailTransaksi($id_transaksi);
        $data['content'] = 'transaksi/detail_transaksi';
        $this->load->view('templates/main_view', $data);
    }

    public function getTransaksiByTanggal()
    {
        $this->session->unset_userdata('transaksi');
        $tgl_awal          = $this->input->post('tgl_awal');
        $tgl_ahir          = $this->input->post('tgl_akhir');
        $transaksi         = $this->transaksiModel->getTrasaksiByTgl($tgl_awal, $tgl_ahir);
        if ($transaksi) {
            $this->session->set_userdata('transaksi', $transaksi);
            redirect('transaksi');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Data Transaksi Kosong
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('transaksi');
        }
    }
    public function transaksiAll()
    {
        $data['transaksi'] = $this->transaksiModel->getSeluruhTransaksi();
        $data['content'] = 'transaksi/seluruh_transaksi';
        $this->load->view('templates/main_view', $data);
    }
}
