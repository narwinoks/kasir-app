<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">
            <!-- <img src="https://th.bing.com/th/id/R.880b2bb1f1152ca08d91d87b1668c98c?rik=%2b7as3oAPdslUtA&riu=http%3a%2f%2fblog.flux-design.us%2fwp-content%2fuploads%2f2013%2f10%2f16-expresso.jpg&ehk=vu%2b4CEspvPFRsU2whynIV478B7dr6xetqJ%2fHNeSuRGk%3d&risl=&pid=ImgRaw&r=0" width="120px" alt=""> -->
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="<?= base_url('home'); ?>">Home</a>
                <!-- kasir -->
                <?php if ($this->session->userdata('level') == 3) : ?>
                    <a class="nav-link" href="<?= base_url('kasir'); ?>">Kasir</a>
                    <a class="nav-link" href="<?= base_url('kasir/riwayatTransaksi'); ?>">Riwayat Transaksi</a>
                    <!-- manager -->
                <?php elseif ($this->session->userdata('level') == 2) : ?>
                    <a class="nav-link" href="<?= base_url('menu'); ?>">Menu</a>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Transaksi</a>
                        <div class="dropdown-menu">
                            <a href="<?= base_url('transaksi/transaksiall'); ?>" class="dropdown-item">Transaksi</a>
                            <a href="<?= base_url('transaksi'); ?>" class="dropdown-item">Filter Transaksi</a>
                        </div>
                    </li>
                    <a class="nav-link" href="<?= base_url('laporan'); ?>">Laporan</a>
                    <a class="nav-link" href="<?= base_url('logActivity'); ?>">Log Karyawan</a>
                <?php else : ?>
                    <a class="nav-link" href="<?= base_url('users'); ?>">Users</a>
                    <a class="nav-link" href="<?= base_url('logActivity'); ?>">Log Karyawan</a>
                <?php endif; ?>
                <!-- <a class="nav-link" href="<?= base_url("menu"); ?>">Menu</a>
                <a class="nav-link disabled">Disabled</a> -->
            </div>
        </div>
    </div>
    <ul class="nav navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><?= $this->session->userdata('name'); ?></a>
            <div class="dropdown-menu dropdown-menu-end">
                <a href="<?= base_url('auth/profile'); ?>" class="dropdown-item">Profile</a>
                <div class="dropdown-divider"></div>
                <a href="<?= base_url('auth/ubahPassword'); ?>" class="dropdown-item">Ubah Password</a>
                <a href="<?= base_url('auth/logout'); ?>" class="dropdown-item">Logout</a>
            </div>
        </li>
    </ul>
</nav>