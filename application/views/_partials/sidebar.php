<!-- Sidebar -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="wrapper">
<ul class="sidebar navbar-nav">
    <?php if($this->session->userdata('role')=="admin"): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('pegawai/dashboard'); ?>">
        <i class="fa fa-tachometer"></i>
    <span>Dashboard</span></a>
    </li>
    <li class="nav-item dropdown <?php echo $this->uri->segment(2) == 'products' ? 'active': '' ?>">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-folder"></i>
            <span>Pegawai</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('pegawai/add') ?>">New Pegawai</a>
            <a class="dropdown-item" href="<?php echo site_url('pegawai/listpegawai') ?>">List Pegawai</a>
            <a class="dropdown-item" href="<?php echo site_url('pegawai/printlist') ?>">Print Data Pegawai</a>
            <a class="dropdown-item" href="<?php echo site_url('pegawai/listapril') ?>">List KGB 1 April</a>
            <a class="dropdown-item" href="<?php echo site_url('pegawai/listoktober') ?>">List KGB 1 Oktober</a>
            <a class="dropdown-item" href="<?php echo site_url('pegawai/countdownkgb') ?>">Countdown KGB</a>
            <a class="dropdown-item" href="<?php echo site_url('pegawai/countdownkpb') ?>">Countdown KPB</a>
        </div>
    </li>
<!--     <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">
            <i class="fa fa-user"></i>
            <span>Users</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <a class="dropdown-item" href="<?php echo site_url('user/add') ?>">New User</a>
            <a class="dropdown-item" href="<?php echo site_url('user/index') ?>">List User</a>
        </div>
    </li> -->
    <?php endif ?>
    <li class="nav-item">
        <a onclick="return confirm('Apakah anda yakin ingin meninggalkan halaman ini?')" class="nav-link" href="<?php echo base_url('login/logout'); ?>">
          <i class="fa fa-gear"></i>
    <span>Logout</span></a>
    </li>
</ul>
</div>
