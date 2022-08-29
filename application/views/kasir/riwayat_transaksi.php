<style>
    tr {
        margin: 0 auto;
        vertical-align: middle !important;
        text-align: center !important;
    }
</style>
<div class="row">
    <div class="container">
        <div class="col-md-12 col-lg-12 col-xl-12 mt-4 px-4">
            <h6 class="page-title h5">
                Riwayat Transaksi<small class="text-success h7">Kelola Transaksi</small>
            </h6>
            <?= $this->session->flashdata('pesan');
            ?>

            <div class="card bg-transparent border-info ">
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-md-11">
                            Daftar
                        </div>
                        <div class="col-md-1 float-right">
                            <i class="">
                                <a href="<?= base_url('kasir'); ?>" class="btn btn-outline-primary">Kembali</a>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-full-width" id="myTable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Kode Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>Nama Konsumen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- jika data kosong nak ra dikek i gak pp -->
                                <?php if ($transaksi == null) : ?>
                                    <tr>
                                        <td colspan="5">Data Transaksi Kosong</td>
                                    </tr>
                                <?php else : ?>
                                    <!--  -->
                                    <?php $no = 1;
                                    foreach ($transaksi as $val) :

                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $val['transaksi_code']; ?></td>
                                            <td><?= $val['tgl_transaksi']; ?></td>
                                            <td><?= $val['customer_name']; ?></td>
                                            <td>
                                               <a href="<?=base_url('kasir/detailTransaksi/')  ;?><?=$val['id_transaksi']  ;?>" class="btn btn-info btn-sm">Detail</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>