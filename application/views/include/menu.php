	            <!-- Main Sidebar Container -->
			<aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo base_url();?>" class="brand-link">
                <span class="brand-text font-weight-light"><?php echo $this->config->item('site_title'); ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo base_url("assets/");?>dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $this->session->Login['name'].' '.$this->session->Login['surname']?></a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?php echo base_url(); ?>" class="nav-link">
                                <i class="fas fa-file-invoice-dollar"></i>
                                <p>
                                    Hareket Dökümü
                                    <!--<span class="right badge badge-danger">New</span>-->
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">İÇERİK YÖNETİMİ</li>

<!-- menu-open -->
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-film"></i>
                                <p>
                                    Dizi Yönetimi
                                    <i class="fas fa-angle-left right"></i>
                                    <!--<span class="badge badge-danger right">1</span>-->
                                </p>
                            </a>
                            <ul class="nav nav-treeview menu-open">
                                <li class="nav-item">
                                    <a href="pages/charts/chartjs.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Diziler</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/flot.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sezonlar</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="pages/charts/inline.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Bölümler</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-film"></i>
                                <p>
                                    Film Yönetimi
                                    <!--<span class="badge badge-danger right">2</span>-->
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo base_url('admin/category'); ?>" class="nav-link  <?php if($this->uri->uri_string() =="admin/category"){echo 'active';}?>">
                                <i class="nav-icon fa fa-list-alt"></i>
                                <p>
                                    Kategoriler
                                    <!--<span class="badge badge-danger right">1</span>-->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-camera"></i>
                                <p>
                                    Resim Yönetimi
                                    <!--<span class="badge badge-danger right">2</span>-->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Oyuncu Yönetimi
                                    <!--<span class="badge badge-danger right">2</span>-->
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon fa fa-play-circle"></i>
                                <p>
                                    Player Yönetimi
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="pages/calendar.html" class="nav-link">
                                <i class="nav-icon fa fa-comments"></i>
                                <p>
                                    Yorumlar
                                    <!--<span class="badge badge-warning right">2</span>-->
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">AYARLAR</li>

                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon far fa fa-cogs"></i>
                                <p>
                                    Site Ayarları
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon fa fa-users"></i>
                                <p>
                                    Üyeler
                                </p>
                            </a>
                        </li>
<!--
                        <li class="nav-item">
                            <a href="pages/gallery.html" class="nav-link">
                                <i class="nav-icon fa fa-user-lock"></i>
                                <p>
                                    Yetki Ayarları
                                </p>
                            </a>
                        </li>
-->
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>