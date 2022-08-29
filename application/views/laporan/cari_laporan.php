<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6 mt-4 px-4">
                <?php echo $this->session->flashdata('pesan');
                ?>
                <h6 class="page-title h5">
                    Cetak<small class="text-success h7">Laporan</small>
                </h6>
                <div class="card bg-transparent border-info ">
                    <div class="card-header bg-info">
                        Laporan Harian
                    </div>
                    <?php echo form_open('laporan/getLaporanHarian') ?>
                    <div class="card-body">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="tgl_awal">Tanggal Awal</label>
                            <input type="date" autocomplete="off" id="" name="tgl_awal" autocomplete="off" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="tgl_akhir">Tanggal Akhir</label>
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
                    Cetak<small class="text-success h7">Laporan</small>
                </h6>
                <div class="card bg-transparent border-info ">
                    <div class="card-header bg-info">
                        Laporan Bulanan
                    </div>
                    <?php echo form_open('laporan/getLaporanBulanan') ?>
                    <div class="card-body">
                        <div class="form-outline mb-4">
                            <label class="form-label" for="name">Pilih Bulan:</label>
                            <?php echo form_dropdown('bulan', $bulan, set_value('bulan'), 'class="form-select"'); ?>
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
        <?php $laporan = $this->session->userdata('laporan'); ?>
        <div class="row">
            <div class="col-md-12 mt-4 px-4">
                <h6 class="page-title h5">
                    Cetak<small class="text-success h7">Laporan</small>
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
                                        <th>Tanggal Transaksi</th>
                                        <th>Nama Menu</th>
                                        <th>Penjualan</th>
                                        <th>Pemasukan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- jika data kosong nak ra dikek i gak pp -->
                                    <?php if ($laporan == null) : ?>
                                        <tr>
                                            <td colspan="6" align="center">laporan Kosong</td>
                                        </tr>
                                    <?php else : ?>
                                        <!--  -->
                                        <?php $no = 1;
                                        $total = 0;
                                        foreach ($laporan as $val) :

                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $val['tgl_transaksi']; ?></td>
                                                <td><?= $val['menu_name']; ?></td>
                                                <td><?= $val['SUM(tbl_item_transaksi.jumlah_pesanan)']; ?></td>
                                                <td><?= $val['menu_price'] * $val['SUM(tbl_item_transaksi.jumlah_pesanan)']; ?></td>
                                            </tr>
                                            <?php
                                            // jumlah 
                                            $tot = $val['menu_price'] * $val['SUM(tbl_item_transaksi.jumlah_pesanan)'];
                                            $total += $tot;
                                            ?>
                                        <?php endforeach; ?>
                                        <tr>
                                            <td colspan="4">Total</td>
                                            <td><?= $total; ?></td>
                                        </tr>
                                        <tr>
                                            <td colspan="5">
                                                <a href="<?= base_url('laporan/cetak_laporan'); ?>" target="_blank">Cetak</a>
                                            </td>
                                        </tr>
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