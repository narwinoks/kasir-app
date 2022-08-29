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
                Daftar Menu<small class="text-success h7"> Kelola Menu</small>
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
                                <a href="<?= base_url('menu/tambah_menu'); ?>" class="btn btn-outline-primary">Tambah</a>
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
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- jika data kosong nak ra dikek i gak pp -->
                                <?php if ($menu == null) : ?>
                                    <tr>
                                        <td colspan="4">Data Menu Kosong</td>
                                    </tr>
                                <?php else : ?>
                                    <!--  -->
                                    <?php $no = 1;
                                    foreach ($menu as $val) :

                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $val['menu_name']; ?></td>
                                            <td><?= $val['menu_price']; ?></td>
                                            <td>
                                                <a href="<?= base_url('menu/hapus_menu/'); ?><?= $val['id_menu']; ?>" onclick="return confirm('yakin?')" class="btn btn-danger btn-sm">Hapus</a>
                                                <a href="<?= base_url('menu/ubah_menu/'); ?><?= $val['id_menu']; ?>" class="btn btn-primary btn-sm">Ubah</a>
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