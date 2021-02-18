<!DOCTYPE html>
<html lang="en">
<head>
    <title>Siwalan Health</title>
    <!-- CSS -->
    <?php $this->load->view('partials/_css');?>
</head>
<body class="light" style="font-family: Poppins; background-color: white; overflow: hidden">
<!-- Pre loader -->
<?php $this->load->view('partials/_preloader');?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #FFFFFF !important; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); height: 82px">
        <a style="margin-left: 25px" class="navbar-brand" href="https://siwalan.tubankab.go.id/"><img src="<?= base_url('/assets/img/logo-siwalan.png')?>" width="130px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" style="font-size: 16px;  font-family: 'Poppins SemiBold'">
                <li class="nav-item active" style="margin-left: 25px">
                    <a class="nav-link" href="https://siwalanwisata.tubankab.go.id/" style="color: #495057;">Wisata <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" style="margin-left: 25px">
                    <a class="nav-link" href="https://siwalanangkut.tubankab.go.id/" style="color: #495057;">Angkot</a>
                </li>
                <li class="nav-item" style="margin-left: 25px">
                    <a class="nav-link" href="#" style="color: #495057;">Siwalan Health</a>
                    <center><hr style="margin: -7px 0 0 0; height:4px; border:none; color:#008F9F; background-color:#008F9F;" width="90%"></center>
                </li>
            </ul>
        </div>
    </nav>
</header>
<main role="main">
    <div class="row" style="padding: 75px 0 0 0">
        <div class="col-md-7" style="padding-left: 40px">
            <center><img src="<?= base_url('/assets/img/halodoc_illustration.png')?>"  width="75%"></center>
        </div>
        <div class="col-md-5" style="padding: 50px 0 0 0">
            <p style="font-size: 36px; font-family: 'Poppins ExtraBold'; color: #495057">Siwalan Health</p>
            <p style="font-size: 21px; font-family: 'Poppins'">Konsultasi dengan dokter jadi <br>lebih mudah</p>
            <p style="font-size: 24px; font-family: 'Poppins SemiBold';">Konsultasi langsung, buat jadwal <br> konsultasi, dan ambil resep dari
                <br>dokter di apotik terdekat</p>
            <br>
            <span style="font-size: 16px;">Download aplikasi mobile Siwalan sekarang di </span>

            <div class="row" style="margin: 14px 0 0 0px;">
                <a href=""><img src="<?= base_url('/assets/img/playstore.png')?>" width="202px"></a>
                <a href=""><img src="<?= base_url('/assets/img/appstore.png')?>"  width="202px" height="60px" style="margin-left: 10px"></a>
            </div>
        </div>
    </div>
</main>
<!--/#app -->
<?php $this->load->view('partials/_javascripts');?>
</body>
</html>