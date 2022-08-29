<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 mt-4 px-4">
                <?= $this->session->flashdata('pesan') ?>
                <h6 class="page-title h5">
                    Riwayat Transaksi<small class="text-success h7"> Lihat Transaksi</small>
                </h6>
                <div class="card bg-transparent border-info ">
                    <div class="card-header bg-info">
                        Riwayat Tanggal
                    </div>
                    <?php echo form_open('transaksi/getTransaksiByTanggal') ?>
                    <div class="card-body">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="tgl_awal">Tanggal Awal:</label>
                            <input type="date" autocomplete="off" id="" name="tgl_awal" autocomplete="off" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="tgl_akhir">Tanggal Akhir:</label>
                            <input type="date" autocomplete="off" id="" name="tgl_akhir" autocomplete="off" class="form-control" />
                        </div>
                        <div class="row text-end">
                            <div class="">
                                <button type="submit" class="btn btn-success">Cari</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6 mt-4 px-4">
                <h6 class="page-title h5">
                    Riwayat Transaksi<small class="text-success h7"> Lihat Transaksi</small>
                </h6>
                <div class="card bg-transparent border-info ">
                    <div class="card-header bg-info">
                        Riwayat User
                    </div>
                    <?php echo form_open('transaksi/getTrasaksiByUser') ?>
                    <div class="card-body">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Nama User:</label>
                            <select class="form-select" name="id_user" id="id_user" aria-label="Default select example">
                                <?php foreach ($id_user as $val) : ?>
                                    <option value="<?= $val['id_user']; ?>"><?= $val['username']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="row text-end">
                            <div class="">
                                <button type="submit" class="btn btn-success">Cari</button>
                            </div>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
        <?php $transaksi = $this->session->userdata('transaksi'); ?>
        <div class="row">
            <div class="col-md-12 mt-4 px-4">
                <h6 class="page-title h5">
                    Riwayat Transaksi<small class="text-success h7"> Lihat Transaksi</small>
                </h6>
                <div class="card bg-transparent border-info ">
                    <div class="card-header bg-info">
                        Daftar Transaksi
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
                                            <td colspan="5">Transaksi Kosong</td>
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
                                                    <a href="<?= base_url('transaksi/detailTransaksi/'); ?><?= $val['id_transaksi']; ?>" class="btn btn-info">Detail</a>
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
</div>