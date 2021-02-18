<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <!-- CSS -->
    <?php $this->load->view('partials/_css');?>
</head>
<body class="light">
<!-- Pre loader -->
<?php $this->load->view('partials/_preloader');?>
<div id="app">
<?php $this->load->view('partials/_sidebar');?>
    <!--Sidebar End-->
    <?php $this->load->view('partials/_header');?>
    <div class="page has-sidebar-left height-full">
        <header class="blue accent-3 relative nav-sticky">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <h4>
                            <i class="icon-box"></i>
                            Dashboard
                        </h4>
                    </div>
                </div>
        </header>
        <div class="container-fluid relative animatedParent animateOnce">
            <center><h1 style="margin-top: 25%; font-size: 75px">Selamat Datang</h1></center>
        </div>
    </div>
</div>
<!--/#app -->
<?php $this->load->view('partials/_javascripts');?>
<script>
    $(document).ready(function () {
        $('#btnPesan').click(function () {
            $(this).addClass('d-none');
            $('#addMenu').removeClass('d-none');
            $('#total').val('1');
        })

        $('#add').click(function () {
            var total = $('#total').val();
            $('#total').val(parseInt(total) + 1);
        })

        $('#minus').click(function () {
            var total = $('#total').val();
            total = total - 1;
            if (total == 0){
                $('#addMenu').addClass('d-none');
                $('#btnPesan').removeClass('d-none');
            }
            $('#total').val(total);
        })
    });
</script>
</body>
</html>