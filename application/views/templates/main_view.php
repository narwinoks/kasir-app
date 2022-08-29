<?php
// file main view digunakan untuk memenggil seluruh templates yang dibutuhkan
// apabila user mencoba masuk sebelum login maka dilakukan pengkondisian 
if ($this->session->userdata('id_user') == true) :
    // date_default_timezone_set("Asia/Jakarta");
    //header
    $this->load->view('templates/header');
    // navbar
    $this->load->view('templates/navbar');
?>

    <?php
    // content
    $this->load->view($content);
    ?>
<?php
    // footer
    $this->load->view('templates/footer');
else :
    redirect('auth');
endif;
?>