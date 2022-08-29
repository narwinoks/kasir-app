<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">
    <title>Keuanngan Laporan Cafe Demen Ngopi</title>
</head>
<div class="row mt-3 px-2">
    <div class="col-md-12">
        <h5 class="text-succces text-center">Laporan Keuangan Cafe Bisa Ngopi</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Tanggal Transaksi</th>
                    <th>Nama Menu</th>
                    <th>Penjualan</th>
                    <th>Pemasukan</th>
                </tr>
            </thead>
            <tbody>
                <!--  -->
                <?php $no = 1;
                $total = 0;
                foreach ($laporan as $val) :

                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $val['tgl_transaksi']; ?></td>
                        <td><?= $val['menu_name']; ?></td>
                        <td><?= $val['COUNT(tbl_item_transaksi.id_menu)']; ?></td>
                        <td><?= $val['menu_price'] * $val['COUNT(tbl_item_transaksi.id_menu)']; ?></td>
                    </tr>
                    <?php
                    // jumlah 
                    $tot = $val['menu_price'] * $val['COUNT(tbl_item_transaksi.id_menu)'];
                    $total += $tot;
                    ?>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4">Total</td>
                    <td><?= $total; ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<body>
</body>
<!-- print go java script -->
<script type="text/javascript">
    window.print();
</script>

</html>