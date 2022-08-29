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
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover table-full-width" id="myTable">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>Nama User</th>
                                    <th>Username</th>
                                    <th>Aktivitas</th>
                                    <th>Waktu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- jika data kosong nak ra dikek i gak pp -->
                                <?php if ($log == null) : ?>
                                    <tr>
                                        <td colspan="4">Data log Kosong</td>
                                    </tr>
                                <?php else : ?>
                                    <!--  -->
                                    <?php $no = 1;
                                    foreach ($log as $val) :

                                    ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $val['name']; ?></td>
                                            <td><?= $val['username']; ?></td>
                                            <td><?= $val['log']; ?></td>
                                            <td><?= $val['created_at']; ?></td>
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