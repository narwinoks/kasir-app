<div class="row">
    <div class="container">
        <div class="col-md-12 mt-4 px-3">
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
                                <a href="<?= base_url('menu'); ?>" class=" btn btn-outline-primary">kembali</a>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?= form_open() ?>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="jenis_menu">Jenis Menu:</label>
                        <select class="form-select" name="jenis_menu" aria-label="Default select example">
                            <option selected value="0">Open this select menu</option>
                            <option value="0">Makanan</option>
                            <option value="1">Minuman</option>
                        </select>
                        <?= form_error('jenis_menu', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="nama_menu">Nama Menu</label>
                        <input type="text" autocomplete="off" id="rupiah" name="nama_menu" class="form-control" />
                        <?= form_error('nama_menu', ' <small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-outline mb-4">
                        <label class="form-label" for="harga_menu">Harga Menu:</label>
                        <input type="text" autocomplete="off" id="rupiah" name="harga_menu" class="form-control" />
                        <?= form_error('harga_menu', ' <small class="text-danger pl-3">', '</small>'); ?>
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