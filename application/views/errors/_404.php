<!DOCTYPE html>
<html lang="en">
<head>
    <title>Error 404</title>
    <?php $this->load->view('partials/_css'); ?>
</head>

<body class="fix-header card-no-border">
<?php $this->load->view('partials/_preloader'); ?>

<section id="wrapper" class="error-page">
    <div class="error-box">
        <div class="error-body text-center">
            <h1>404</h1>
            <h3 class="text-uppercase">Halaman tidak ditemukan !</h3>
            <p class="text-muted m-t-30 m-b-30">SEPERTINYA ANDA MENCOBA KEMBALI KE HALAMAN UTAMA</p>
            <a href="<?php echo site_url('/Home')?>" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Kembali ke Home</a> </div>
        <footer class="footer text-center">© 2017 setClass.</footer>
    </div>
</section>

<?php $this->load->view('partials/_javascripts'); ?>
</body>
</html>
