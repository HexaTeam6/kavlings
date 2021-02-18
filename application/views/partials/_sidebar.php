<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="<?= base_url('/assets/img/siwalan dok_horizontal_logo.svg')?>"style="max-width: none; width: 150px;">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?= base_url('assets/img/dummy/u2.png')?>" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1"><?= $_SESSION['nama']?></h6>
                        <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
<!--                        <a href="index.html" class="list-group-item list-group-item-action ">-->
<!--                            <i class="mr-2 icon-umbrella text-blue"></i>Profile-->
<!--                        </a>-->
                        <a href="<?= site_url('/GantiPassword')?>" class="list-group-item list-group-item-action"><i
                                    class="mr-2 icon-lock text-primary"></i>Ganti Password</a>
                        <a href="<?= site_url('/Auth/logout')?>" class="list-group-item list-group-item-action"><i
                                    class="mr-2 icon-exit_to_app text-red"></i>Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header"><strong>MENU</strong></li>
            <?php if ($_SESSION['role'] == 'A'){?>
            <li class="treeview no-b">
                <a href="#">
                    <i class="icon icon-bar-chart text-primary s-18"></i>
                    <span>Monitoring</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('/Monitoring/StatusDokter')?>"><i class="icon icon-bar-chart-o"></i>Status Dokter</a></li>
                    <li><a href="<?php echo site_url('/Monitoring/JadwalDokter')?>"><i class="icon icon-bar-chart-o"></i>Jadwal Dokter Mendatang</a></li>
                    <li><a href="<?php echo site_url('/Monitoring/Histori')?>"><i class="icon icon-bar-chart-o"></i>Histori</a></li>
                </ul>
            </li>
            <?php }?>
            <?php if ($_SESSION['role'] == 'A'){?>
            <li class="treeview no-b">
                <a href="<?php echo site_url('/Spesialis')?>">
                    <i class="icon icon-document-list text-primary s-18"></i>
                    <span>Data Spesialis</span>
                </a>
            </li>
            <?php }?>
            <?php if ($_SESSION['role'] == 'K'){?>
            <li class="treeview no-b">
                <a href="#">
                    <i class="icon icon-document text-primary s-18"></i>
                    <span>Resep</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('/DataResep')?>"><i class="icon icon-document-list"></i>Data Resep</a></li>
                    <li><a href="<?php echo site_url('/DataResep/histori')?>"><i class="icon icon-timer"></i>Histori</a></li>
                </ul>
            </li>
            <?php }?>
            <?php if ($_SESSION['role'] == 'A'){?>
            <li class="treeview no-b">
                <a href="#">
                    <i class="icon icon-plus text-primary s-18"></i>
                    <span>Dokter</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('/Dokter')?>"><i class="icon icon-plus"></i>Data Dokter</a></li>
                    <li><a href="<?php echo site_url('/JadwalDokter')?>"><i class="icon icon-timer"></i>Jadwal Dokter</a></li>
                </ul>
            </li>
            <?php }?>
            <?php if ($_SESSION['role'] == 'A'){?>
            <li class="treeview no-b">
                <a href="<?php echo site_url('/Unit')?>">
                    <i class="icon icon-person text-primary s-18"></i>
                    <span>Data Unit</span>
                </a>
            </li>
            <?php }?>
            <?php if ($_SESSION['role'] == 'A'){?>
                <li class="treeview no-b">
                    <a href="#">
                        <i class="icon icon-local_pharmacy text-primary s-18"></i>
                        <span>Apotek</span>
                        <i class="icon icon-angle-left s-18 pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="<?php echo site_url('/Apotek')?>"><i class="icon icon-local_pharmacy"></i>Data Apotek</a></li>
                        <li><a href="<?php echo site_url('/JadwalApotek')?>"><i class="icon icon-timer"></i>Jadwal Apotek</a></li>
                    </ul>
                </li>
            <?php }?>
        </ul>
    </section>
</aside>