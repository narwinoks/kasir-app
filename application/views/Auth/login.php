<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <title>From Login</title>
</head>

<body>
    <!-- nak sekirang bootrstrap e gawe mumet gak sah ruwet" desain e -->
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <!-- menampilkan pesan kesalahan -->
                <?= $this->session->flashdata('pesan') ?>
                <div class="card">
                    <div class="card-header">
                        Form Login
                    </div>
                    <div class="card-body">
                        <div class="form-outline mb-4">
                            <?= form_open() ?>
                            <label class="form-label" for="username">Username</label>
                            <input type="text" autocomplete="off" id="username" name="username" class="form-control" />
                            <?= form_error('username', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" autocomplete="off" id="password" name="password" class="form-control" />
                            <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row text-end">
                            <div class="">
                                <button type="submit" class="btn btn-primary">Login</button>
                                <button type="reset" class="btn btn-danger">Batal</button>
                            </div>
                        </div>
                        <?= form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>