</body>
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- BOOTSTRAP SCRIPTS  -->
<script src="<?= base_url('assets/js/bootstrap.min.js'); ?> "></script>
<script src="<?= base_url(); ?>assets/select2/js/select2.full.min.js" type="text/javascript"></script>
<script src="<?= base_url('assets/datatables/js/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/datatables/js/dataTables.bootstrap5.js'); ?>"></script>
<!-- koneksi js se data tablese sek tombol search mbi pagination kui lho -->
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
<script>
    $(document).ready(function() {
        $('.form-select').select2();
    });
</script>
<!--  -->

</html>