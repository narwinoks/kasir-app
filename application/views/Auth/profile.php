<div class="row">
    <div class="container">
        <div class="col-md-12 mt-4 px-3">
            <?= $this->session->flashdata('pesan') ?>
            <h6 class="page-title h5">
                <small class="text-info h7">Your Profile</small>
            </h6>
            <div class="card bg-transparent border-info ">
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-md-11 h5">
                            profile
                        </div>
                        <div class="col-md-1 float-right">
                            <i class="">
                                <a href="<?= base_url('home'); ?>" class=" btn btn-outline-primary">kembali</a>
                            </i>
                        </div>
                    </div>
                </div>
                <?php echo form_open() ?>
                <input type="hidden" id="" name="id_user" value="<?= $users['id_user']; ?>" class="form-control" />
                <div class="card-body">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Nama User:</label>
                        <input type="text" id="" name="name" value="<?= $users['name']; ?>" class="form-control" />
                        <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Username:</label>
                        <input type="text" id="" name="username" value="<?= $users['username']; ?>" class="form-control" />
                        <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <?php if ($users['level'] == 1) {
                        $level = 'admin';
                    } else if ($users['level'] == 2) {
                        $level = 'manager';
                    } else {
                        $level = 'kasir';
                    }
                    ?>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Level</label>
                        <input type="text" id="" readonly name="username" value="<?= $level; ?>" class="form-control" />
                    </div>
                    <div class="row text-end">
                        <div class="">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>