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
                Detail Transaksi<small class="text-success h7"> Kelola Transaksi</small>
            </h6>
            <div class="card bg-transparent border-info ">
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-md-11">
                            Daftar
                        </div>
                        <div class="col-md-1 float-right">
                            <i class="">
                                <a href="<?= base_url('transaksi'); ?>" class="btn btn-outline-primary">Kembali</a>
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
                                    <th>Nama Menu</th>
                                    <th>Harga Menu</th>
                                    <th>jumlah pesanan</th>
                                    <th>Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- jika data kosong nak ra dikek i gak pp -->
                                <?php if ($detail_transaksi == null) : ?>
                                    <tr>
                                        <td colspan="5">Data Transaksi Kosong</td>
                                    </tr>
                                <?php else : ?>
                                    <!--  -->
                                    <?php $no = 1;
                                    $total = 0;
                                    foreach ($detail_transaksi as $val) :

                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $val['menu_name']; ?></td>
                                            <td><?= $val['menu_price']; ?></td>
                                            <td><?= $val['jumlah_pesanan']; ?></td>
                                            <td><?= $val['menu_price']  * $val['jumlah_pesanan'] ?> </td>
                                        </tr>
                                        <?php
                                        $tot = $val['menu_price']  * $val['jumlah_pesanan'];
                                        $total += $tot ?>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="4">
                                            <h5 class="text-center">Jumlah Total</h5>
                                        </td>
                                        <td style='text-align  : right !important;'>
                                            <div class="form-group">
                                                <input type="text" style="text-align  : right !important;" id="total_harga" class="form-control" name="subtotal_item" value="<?= $total; ?>" readonly />
                                            </div>
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