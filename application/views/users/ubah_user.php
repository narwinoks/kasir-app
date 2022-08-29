<div class="row">
    <div class="container">
        <div class="col-md-12 mt-4 px-3">
            <h6 class="page-title h5">
                <small class="text-info h7">Ubah User</small>
            </h6>
            <div class="card bg-transparent border-info ">
                <div class="card-header bg-info">
                    <div class="row">
                        <div class="col-md-11 h5">
                            Ubah User
                        </div>
                        <div class="col-md-1 float-right">
                            <i class="">
                                <a href="<?= base_url('users'); ?>" class=" btn btn-outline-primary">kembali</a>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?= form_open() ?>
                    <!-- penting iki -->
                    <input type="hidden" name="id_user" value="<?= $users['id_user']; ?>">
                    <!--  -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Nama User:</label>
                        <input type="text" autocomplete="off" id="rupiah" name="name" value="<?= $users['name']; ?>" autocomplete="off" class="form-control" />
                        <?= form_error('name', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="username">Username:</label>
                        <input type="text" autocomplete="off" id="rupiah" name="username" value="<?= $users['username']; ?>" autocomplete="off" class="form-control" />
                        <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="level_user">Level:</label>
                        <select class="form-select" name="level_user" aria-label="Default select example">
                            <option selected value="0" hidden>Open this select menu</option>
                            <?php if ($users['level'] == 2) : ?>
                                <option value="2" selected>Manager</option>
                                <option value="3">Kasir</option>
                            <?php else : ?>
                                <option value="2">Manager</option>
                                <option value="3" selected>Kasir</option>
                            <?php endif; ?>
                        </select>
                        <?= form_error('level_user', ' <small class="text-danger pl-3">', '</small>'); ?>
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