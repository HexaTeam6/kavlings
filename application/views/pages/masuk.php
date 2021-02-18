<!DOCTYPE html>
<html lang="en">
<head>
    <title>Masuk</title>
    <!-- CSS -->
    <?php $this->load->view('partials/_css');?>
</head>
<body class="light">
<!-- Pre loader -->
<?php $this->load->view('partials/_preloader');?>
<div id="app">
    <main>
        <div id="primary" class="p-t-b-100 height-full">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-md-auto paper-card">
                        <div class="text-center">
                            <img src="<?= base_url('/assets/img/siwalan dok_horizontal_logo.svg')?>" alt="">
                            <h3 class="mt-2">Selamat Datang</h3>
                        </div>
                        <form action="<?php echo site_url('/Auth/login/')?>" method="post">
                            <div class="form-group has-icon"><i class="icon-user"></i>
                                <input type="email" class="form-control form-control-lg"
                                       placeholder="Email" name="email">
                            </div>
                            <div class="form-group has-icon"><i class="icon-lock"></i>
                                <input type="password" class="form-control form-control-lg"
                                       placeholder="Kata Sandi" name="password">
                            </div>
                            <input type="submit" class="btn btn-primary btn-lg btn-block" value="Masuk">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- #primary -->
    </main>

    <!--/#app -->
    <?php $this->load->view('partials/_javascripts');?>
</body>
</html>