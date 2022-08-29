<?php
class Laporan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load form  dan model
        $this->load->model('laporanModel');
        $this->load->model('logModel');
        // set privilese
        if ($this->session->userdata('level') != 2) {
            redirect('auth');
        }
    }
    public function index()
    {
        $data['bulan'] = [
            '01'        => "January",
            '02'        => "February",
            '03'        => "March",
            '04'        => "April",
            '05'        => "May",
            '06'        => "June",
            '07'        => "July",
            '08'        => "August",
            '09'        => "September",
            '10'        => "October",
            '11'        => "November",
            '12'        => "December",
        ];
        $data['content']    = 'laporan/cari_laporan';
        $this->load->view('templates/main_view', $data);
    }
    public function getLaporanHarian()
    {
        $this->session->unset_userdata('laporan');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
        $laporan_harian = $this->laporanModel->getLaporanHarian($tgl_awal, $tgl_akhir);
        if ($laporan_harian) {
            $this->session->set_userdata('laporan', $laporan_harian);
            redirect('laporan');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Laporan Tidak Ditemukan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('laporan');
        }
    }
    public function getLaporanBulanan()
    {
        $this->session->unset_userdata('laporan');
        $bulan      = $this->input->post('bulan');
        $laporan    = $this->laporanModel->getLaporanBulanan($bulan);
        if ($laporan) {
            $this->session->set_userdata('laporan', $laporan);
            redirect('laporan');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            Laporan Tidak Ditemukan
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('laporan');
        }
    }


    public function cetak_laporan()
    {
        $data['laporan'] = $this->session->userdata('laporan');
        $data['content']    = 'laporan/cetak_laporan';
        $this->load->view('laporan/cetak_laporan', $data);
    }
}
