        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image"> 
                        <img src="<?= base_url('assets/vendor/img/default.jpg'); ?>" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Administrator</p>
                        <i class="fa fa-circle text-success"> Online</i>
                    </div>
                </div>
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menu Utama</li>
                    <li>
                        <a href="<?= base_url('adminpage'); ?>">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            <span class="pull-right-container">
                                <small class="label pull-right bg-green">new</small>
                            </span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>Manajemen Berita</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href=" <?= base_url('adminpage/berita'); ?> "><i class="fa fa-circle-o"></i> CRUD Berita</a></li>
                        </ul>
                    </li>

                    <li class="header">Menu Admin</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>Media</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?= base_url('adminpage/download') ?>"><i class="fa fa-circle-o"></i> Download</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Galeri Foto</a></li>
                    </li>
                </ul>
                    <li>
                        <a href="<?= base_url('administrator/logout');  ?>">
                            <i class="fa fa-power-off"></i><span> Logout</span>
                        </a>
                    </li>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->