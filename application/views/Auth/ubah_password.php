<div class="row">
    <div class="container">
        <div class="col-md-12 mt-4 px-3">
            <?php
            $id_user = $this->session->userdata('id_user');
            echo $this->session->flashdata('pesan');
            ?>
            <h6 class="page-title h5">
                <small class="text-info h7">Tambah Menu</small>
            </h6>
            <div class="card bg-transparent border-info ">
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-md-11 h5">
                            Daftar
                        </div>
                        <div class="col-md-1 float-right">
                            <i class="">
                                <a href="<?= base_url('home'); ?>" class=" btn btn-outline-primary">kembali</a>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?= form_open() ?>
                    <input type="hidden" name="id_user" value="<?= $id_user; ?>">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password_lama">Password Lama:</label>
                        <input type="password" autocomplete="off" value="<?= set_value('password_lama'); ?>" id="" name="password_lama" class="form-control" />
                        <?= form_error('password_lama', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password_baru">Password Baru:</label>
                        <input type="password" autocomplete="off" id="" value="<?= set_value('password_baru'); ?>" name="password_baru" class="form-control" />
                        <?= form_error('password_baru', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="konfirmasi_password">Konfirmasi Password:</label>
                        <input type="password" autocomplete="off" value="<?= set_value('konfirmasi_password'); ?>" id="" name="konfirmasi_password" class="form-control" />
                        <?= form_error('konfirmasi_password', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="row text-end">
                        <div class="">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</div>