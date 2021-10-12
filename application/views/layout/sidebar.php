<aside class="main-sidebar sidebar-light-primary elevation-4">
    <a href="<?php echo base_url('beranda') ?>" class="brand-link">
        <img src="<?php echo base_url('assets/dist/img/logo.png') ?>" alt="BLUETECH IT SCHOOL" class="brand-image">
        <span class="brand-text font-weight-light"><b><br></b></span>
    </a>

    <?php if ($this->session->userdata('level_user') == "admin") { ?>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('beranda') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('pendaftar') ?>" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Pendaftaran
                        </p>
                    </a>
                </li>
                <li class="nav-header">SYSTEM</li>
                
                <li class="nav-item">
                    <a href="<?php echo base_url('logout') ?>" class="nav-link">
                        <i class="nav-icon fa fa-power-off"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <?php } else if ($this->session->userdata('level_user') == "siswa") { ?>
    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?php echo base_url('beranda') ?>" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Beranda
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('biodata') ?>" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Formulir
                        </p>
                    </a>
                </li>
                <li class="nav-header">SYSTEM</li>
            
                <li class="nav-item">
                    <a href="<?php echo base_url('logout') ?>" class="nav-link">
                        <i class="nav-icon fa fa-power-off"></i>
                        <p>
                            Keluar
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
    <?php } ?>

</aside>