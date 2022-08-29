<style>
    tr {
        margin: 0 auto;
        vertical-align: middle !important;
        text-align: center !important;
    }
</style>
<script src="<?= base_url('assets/jquery/jquery.min.js'); ?>"></script>
<script>
    base_url = '<?php echo base_url(); ?>';
    mappia = "	<?php
                    $site_url = 'kasir';
                    echo site_url($site_url);
                    ?>";
    // drop dwon bertingkat
    $(document).ready(function() {
        $("#jenis_menu").change(function() {
            var jenis_menu = $(this).val();
            console.log(jenis_menu);
            $.ajax({
                url: "<?php echo base_url() ?>kasir/searchMenu",
                type: "POST",
                data: {
                    "jenis_menu": jenis_menu
                },
                cache: false,
                success: function(msg) {
                    $("#menu_name").html(msg);
                }
            })
        })
    });
    // drop down bertingkat
    // menampilkan harga
    $(document).ready(function() {
        $("#menu_name").change(function() {
            var id_menu = $(this).val();
            console.log(id_menu);
            $.ajax({
                url: "<?php echo base_url() ?>kasir/searchHargaMenu",
                type: "POST",
                data: {
                    "id_menu": id_menu
                },
                cache: false,
                success: function(msg) {
                    $("#harga_menu").val(msg);
                }
            })
        })
    });


    $(function() {
        $("#bayar, #total_harga").keyup(function() {
            $("#kembali").val(+$("#bayar").val() - +$("#total_harga").val());
        });
    });


    // meyimpan data item
    function processSimpanArrayItemPesanan() {

        var menu_name = document.getElementById("menu_name").value;
        var menu_price = document.getElementById("harga_menu").value;
        var jumlah_pesanan = document.getElementById("jumlah_pesanan").value;
        var customer_name = document.getElementById("customer_name").value;
        var table_code = document.getElementById("table_code").value;


        $.ajax({
            type: "POST",
            // menyimpan data pesanan
            url: "<?php echo site_url('kasir/simpanDataPesanana'); ?>",
            data: {
                'menu_name': menu_name,
                'menu_price': menu_price,
                'jumlah_pesanan': jumlah_pesanan,
                'customer_name': customer_name,
                'table_code': table_code,
                // 'session_name': "simpatItemPesanan"
            },
            success: function(msg) {
                window.location.replace(mappia);
            }
        });
    }
</script>
<?php echo form_open('kasir/prosesSimpanPesanan') ?>
<?php
$data = $this->session->userdata('addArrayTransactionPesanan-');
$customer_name = $this->session->userdata('customer_name');
$table_code = $this->session->userdata('table_code');
?>
<div class="row">
    <div class="container">
        <div class="col-md-12 mt-4 px-3">
            <!-- menampilkan pesan kesalahan -->
            <?= $this->session->flashdata('pesan') ?>
            <h6 class="page-title h5">
                <small class="text-info h7">Tambah Pesan</small>
            </h6>
            <div class="card bg-transparent border-info ">
                <div class="card-header bg-info">
                    <h5 class="title">Pesanan</h5>
                </div>
                <div class="card-body">
                    <?= form_open() ?>
                    <div class="form-outline mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="customer_name">Nama Konsumen</label>
                                <input type="text" autocomplete="off" id="customer_name" value="<?= $customer_name; ?>" name="customer_name" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="kode_transaksi">Kode Transaksi</label>
                                <input type="text" autocomplete="off" readonly value="<?= $fixcode; ?>" id="rupiah" name="kode_transaksi" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="tgl_transaksi">Waktu</label>
                                <input type="text" autocomplete="off" id="rupiah" readonly value="<?= date('Y-m-d'); ?>" name="tgl_transaksi" class="form-control" />
                                <?= form_error('tgl_transaksi', ' <small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <div class="col-6">
                            <label class="form-label" for="table_code">Kode Meja</label>
                            <input type="text" autocomplete="off" value="<?= $table_code; ?>" id="table_code" name="table_code" class="form-control" />
                            <?= form_error('table_code', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                    <h5 class="form-section bold">Data Pemesanan</h5>
                    <div class="form-outline mb-4">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label" for="jenis_menu">Jenis Menu:</label>
                                <select class="form-select" name="jenis_menu" id="jenis_menu" aria-label="Default select example">
                                    <option selected value="0" hidden>Open this select menu</option>
                                    <option value="0">Makanan</option>
                                    <option value="1">Minuman</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="nama_menu">Nama Menu:</label>
                                <select name="" class="form-select" id="menu_name">
                                    <option value=""></option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="harga_menu">Harga</label>
                                <input type="text" class="form-control" readonly name="harga_menu" id="harga_menu">
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="jumlah_pesanan">Jumlah Pesanan</label>
                                <input type="text" class="form-control" name="jumlah_pesanan" id="jumlah_pesanan">
                            </div>
                        </div>
                    </div>
                    <div class="row text-end">
                        <div class="">
                            <input type="button" name="add2" value="Add" class="btn btn-success" title="Simpan Data" onClick="processSimpanArrayItemPesanan();">
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
            <?php
            $itemPesanan = $this->session->userdata('addArrayTransactionPesanan-');
            ?>
            <div class="card bg-transparent border-info mt-5 ">
                <div class="card-header bg-info">
                    Daftar Pesanan
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-full-width">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama Menu</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th>
                                    <th>Total Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if ($itemPesanan == null) : ?>
                                <?php else : ?>
                                    <?php $i = 1;
                                    $total = 0;
                                    foreach ($itemPesanan as $val) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <!-- mengambil nama makanan aku pengene sek tampil nama ne sek disimpen ng session mau id makanan -->
                                            <td><?= $this->kasirModel->getMenuName($val['menu_name']) ?></td>
                                            <td><?= $val['menu_price']; ?></td>
                                            <td><?= $val['jumlah_pesanan']; ?></td>
                                            <td><?= $val['menu_price']  * $val['jumlah_pesanan']; ?></td>
                                            <td><a href="<?= base_url('kasir/hapusDataPemesanan/'); ?><?= $val['record_id']; ?>" onclick="return confirm ('yakin?')" class="btn btn-danger">Hapus</a></td>
                                        </tr>
                                        <?php
                                        $tot = $val['menu_price']  * $val['jumlah_pesanan'];
                                        $total += $tot ?>
                                    <?php endforeach; ?>
                                    <!-- total -->
                                    <tr>
                                        <td colspan="5">
                                            <h5 class="text-center">Jumlah Total</h5>
                                        </td>
                                        <td style='text-align  : right !important;'>
                                            <div class="form-group">
                                                <input type="text" style="text-align  : right !important;" id="total_harga" class="form-control" name="subtotal_item" value="<?= $total; ?>" readonly />
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- bayar -->
                                    <tr>
                                        <td colspan="5">
                                            <h5 class="text-center">Bayar</h5>
                                        </td>
                                        <td style='text-align  : right !important;'>
                                            <div class="form-group">
                                                <input type="number" style="text-align  : right !important;" class="form-control" name="subtotal_item" id="bayar" value="" />
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- kembali -->
                                    <tr>
                                        <td colspan="5">
                                            <h5 class="text-center">Kembali</h5>
                                        </td>
                                        <td style='text-align  : right !important;'>
                                            <div class="form-group">
                                                <input type="number" style="text-align  : right !important;" class="form-control" name="subtotal_item" id="kembali" value="" />
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <div class="col-md-12" style="text-align  : right !important;">
                            <button type="submit" class="btn btn-success"> Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo form_close() ?>