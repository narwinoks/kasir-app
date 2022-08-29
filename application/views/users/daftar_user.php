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
                Daftar User <small class="text-success h7">Kelola User</small>
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
                                <a href="<?= base_url('users/tambah_users'); ?>" class="btn btn-outline-primary">Tambah</a>
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
                                    <th>Username</th>
                                    <th>Name</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- jika data kosong nak ra dikek i gak pp -->
                                <?php if ($users == null) : ?>
                                    <tr>
                                        <td colspan="5">User Kosong</td>
                                    </tr>
                                <?php else : ?>
                                    <!--  -->
                                    <?php $no = 1;
                                    foreach ($users as $val) :

                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $val['username']; ?></td>
                                            <td><?= $val['name']; ?></td>
                                            <?php if ($val['level'] == 1) : ?>
                                                <td>Admin</td>
                                            <?php elseif ($val['level'] == 2) : ?>
                                                <td>Manager</td>
                                            <?php else : ?>
                                                <td>Kasir</td>
                                            <?php endif; ?>
                                            <td>
                                                <a href="<?= base_url('users/hapus_users/'); ?><?= $val['id_user']; ?>" onclick="return confirm('yakin?')" class="btn btn-danger">Hapus</a>
                                                <a href="<?= base_url('users/ubah_users/'); ?><?= $val['id_user']; ?>" class="btn btn-primary">Ubah</a>
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