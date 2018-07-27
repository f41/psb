<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="<?php echo base_url('assets/');?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3
    </span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo base_url('assets/');?>dist/img/<?php echo ucfirst($this->session->userdata('foto')); ?>" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo ucfirst($this->session->userdata('nama')); ?>
        </a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
with font-awesome or any other icon font library -->
        <li class="nav-header">MENU
        </li>
        <?php if($this->session->userdata('level') == 0) { ?>
        <li class="nav-item">
          <a href="<?php echo base_url();?>" class="nav-link">
            <i class="nav-icon fa fa-home">
            </i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-dashboard">
            </i>
            <p>
              Master
              <i class="right fa fa-angle-left">
              </i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('master/tahun_ajaran');?>" class="nav-link">
                <i class="fa fa-calendar nav-icon">
                </i>
                <p>Tahun Ajaran
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-dashboard">
            </i>
            <p>
              Pendaftaran
              <i class="right fa fa-angle-left">
              </i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('pendaftaran');?>" class="nav-link">
                <i class="fa fa-calendar nav-icon">
                </i>
                <p>Data Pendaftaran
                </p>
              </a>
            </li>
          </ul>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo base_url('pendaftaran/input');?>" class="nav-link">
                <i class="fa fa-calendar nav-icon">
                </i>
                <p>Input Pendaftaran
                </p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('seleksi')?>" class="nav-link">
            <i class="nav-icon fa fa-home">
            </i>
            <p>
              Proses Seleksi
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo base_url('daftar_ulang')?>" class="nav-link">
            <i class="nav-icon fa fa-home">
            </i>
            <p>
              Daftar Ulang
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-file">
            </i>
            <p>
              Laporan
              <i class="right fa fa-angle-left">
              </i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-seleksi">
                <i class="fa fa-calendar nav-icon">
                </i>
                <p>Hasil Seleksi
                </p>
              </a>
            </li>
          </ul>
        </li>
      <?php }else{ ?>
        <li class="nav-item">
          <a href="<?php echo base_url();?>" class="nav-link">
            <i class="nav-icon fa fa-home">
            </i>
            <p>
              Home
            </p>
          </a>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fa fa-file">
            </i>
            <p>
              Laporan
              <i class="right fa fa-angle-left">
              </i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-seleksi">
                <i class="fa fa-calendar nav-icon">
                </i>
                <p>Hasil Seleksi
                </p>
              </a>
            </li>
          </ul>
        </li>
      <?php } ?>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>