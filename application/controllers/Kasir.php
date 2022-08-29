<?php
class Kasir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load form validation dan model
        $this->load->library('form_validation');
        $this->load->model('kasirModel');
        $this->load->model('logModel');
        $this->load->helper('sistem_helper');
        // pembatasan
        if ($this->session->userdata('level') != 3) {
            redirect('auth');
        }
    }
    // menampilkan view kasir
    public function index()
    {
        // membuat kode transaksi
        $date = date('dmY');
        $string = 'P';
        $char = $string . $date;
        $lastNumber = $this->kasirModel->createLastNo($char);
        if (empty($lastNumber)) {
            $lastNumber = 001;
        } else {
            $lastNumber = (int) $lastNumber['last_number'] + 1;
        }
        $fixnumber = sprintf('%03s', $lastNumber);
        $data['fixcode'] = $char . $fixnumber;

        // // create double fungsi sek tak buat ng helper 
        // $data['menu']       = create_double($this->kasirModel->getMenu(), 'id_menu', 'menu_name');
        $data['content']    = 'kasir/Tambah_data';
        $this->load->view('templates/main_view', $data);
    }

    //controller untuk drop dwon menu 
    public function searchMenu()
    {
        $jenis_menu         = $this->input->post('jenis_menu');
        $item               = $this->kasirModel->getMenuByJenis($jenis_menu);
        $data               = "<option value=''>--Choose One--</option>";
        foreach ($item as $mp) {
            $data .= "<option value='$mp[id_menu]'>$mp[menu_name]</option>\n";
        }
        echo $data;
    }

    // menacri harga
    public  function searchHargaMenu()
    {
        $id_menu            = $this->input->post('id_menu');
        $item               = $this->kasirModel->getHargaMenu($id_menu);
        echo $item['menu_price'];
    }
    // simpan data pesanana
    public function simpanDataPesanana()
    {
        $this->session->set_userdata('customer_name', $this->input->post('customer_name'));
        $this->session->set_userdata('table_code', $this->input->post('table_code'));
        $data_pesanana = array(
            'record_id'                             => date('YmdHis'),
            'customer_name'                         => $this->input->post('customer_name', true),
            'menu_name'                             => $this->input->post('menu_name', true),
            'menu_price'                            => $this->input->post('menu_price', true),
            'jumlah_pesanan'                        => $this->input->post('jumlah_pesanan', true)
        );
        $this->form_validation->set_rules('jumlah_pesanan', 'jumlah pesanan', 'required');
        $this->form_validation->set_rules('menu_name', 'nama menu', 'required');
        if ($this->form_validation->run() == true) {
            $dataArrayHeader    = $this->session->userdata('addArrayTransactionPesanan-');
            $dataArrayHeader[$data_pesanana['record_id']] = $data_pesanana;
            $this->session->set_userdata('addArrayTransactionPesanan-', $dataArrayHeader);
            // $data_pesanana = $this->session->userdata('addTransactionItem-');
            // $this->session->set_userdata('addTransactionItem-', $data_pesanana);
        } else {
            $pesan = validation_errors("<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            ", '</div>');
            $this->session->set_flashdata('pesan', $pesan);
        }
    }

    // hapus data pemesanan
    public function hapusDataPemesanan()
    {
        $arrayBaru          = array();
        $var_to             = $this->uri->segment(3);
        $session_name       = "addArrayTransactionPesanan-";
        $dataArrayHeader    = $this->session->userdata($session_name);

        foreach ($dataArrayHeader as $key => $val) {
            if ($key != $var_to) {
                $arrayBaru[$key] = $val;
            }
        }
        $this->session->set_userdata('addArrayTransactionPesanan-', $arrayBaru);
        redirect('kasir');
    }

    public function prosesSimpanPesanan()
    {
        $data_transaksi = [
            'id_user'           => $this->session->userdata('id_user'),
            'transaksi_code'    => $this->input->post('kode_transaksi'),
            'customer_name'     => $this->input->post('customer_name'),
            'table_code'        => $this->input->post('table_code'),
            'tgl_transaksi'     => $this->input->post('tgl_transaksi')
        ];
        // var_dump($data_transaksi);die;
        $this->form_validation->set_rules('customer_name', 'nama konsumen', 'required');
        $this->form_validation->set_rules('table_code', 'kode meja', 'required');
        if ($this->form_validation->run() == true) {
            $id_transaksi = $this->kasirModel->insertDataTransaksi($data_transaksi);
            $ItemTransaksi = $this->session->userdata('addArrayTransactionPesanan-');
            foreach ($ItemTransaksi as  $val) {
                $dataItemTransaksi = array(
                    'id_transaksi'          => $id_transaksi,
                    'id_menu'               => $val['menu_name'],
                    'menu_price'            => $val['menu_price'],
                    'jumlah_pesanan'        => $val['jumlah_pesanan'],
                    'tgl_transaksi'         => date('Y-m-d')
                );

                $this->kasirModel->insertDataItemTransaksi($dataItemTransaksi);
                // set activty log
            };
            $data = [
                'id_user'       => $this->session->userdata('id_user'),
                'log'           => 'menambah pesanan  atas nama ' . $data_transaksi['customer_name'],
                'created_at'    =>  date("Y-m-d H:i:s"),
                'update_at'     =>  date("Y-m-d H:i:s")
            ];
            $this->logModel->addlog($data);
            $this->session->unset_userdata('addArrayTransactionPesanan-');
            $this->session->unset_userdata('customer_name');
            $this->session->unset_userdata('table_code');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
             Data Transaksi Berhasil Ditambahkan!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>');
            redirect('kasir');
        } else {
            $pesan = validation_errors("<div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            ", '</div>');
            $this->session->set_flashdata('pesan', $pesan);
            redirect('kasir');
        }
    }
    public function riwayatTransaksi()
    {
        // mengambil data user 
        $id_user = $this->session->userdata('id_user');
        // mengambil data dari database
        $data['transaksi'] = $this->kasirModel->getRiwayatTransaksi($id_user);
        // view daftar menu
        $data['content'] = 'kasir/riwayat_transaksi';
        $this->load->view('templates/main_view', $data);
    }

    public function detailTransaksi($id_transaksi)
    {
        $data['detail_transaksi'] = $this->kasirModel->getDetailTransaksi($id_transaksi);
        $data['content'] = 'kasir/detail_transaksi';
        $this->load->view('templates/main_view', $data);
    }
}
