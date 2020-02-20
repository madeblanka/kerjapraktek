<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sistem Kepegawaian Diskominfo Kota Denpasar</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/menuutama/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/menuutama/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/menuutama/css/coming-soon.min.css" rel="stylesheet">

</head>
<body>
  <?php if($this->session->flashdata('msg')): ?>
  <script type="text/javascript">
    alert('<?= $this->session->flashdata('msg'); ?>');
  </script>
<?php endif ?>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo base_url() ?>assets/menuutama/mp4/bg.mp4" type="video/mp4">
  </video>
  <div class="masthead">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-12 my-auto">
          <div class="masthead-content text-white py-5 py-md-0">
            <img src="<?php echo base_url('upload/pegawai/logokominfo.png')?>" width="230" />
            <h2 class="mb-4">Selamat Datang</h2>
            <h5 class="mb-1">Di Sistem Kepegawaian</h5>
            <h5 class="mb-3"> Dinas Komunikasi,Informatika dan Statistik Kota Denpasar</h5>
            <a href="#" data-toggle="modal" data-target="#mylogin">
            <button type="button" class="btn btn-primary" name="button">Admin</button>
            </a>
            <a href="#" data-toggle="modal" data-target="#mylogin2">
            <button type="button" class="btn btn-success" name="button">Pegawai</button>
            </a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal login -->
  <div id="mylogin" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
        </div>
        <div class="modal-body">
          <form action="<?php echo base_url('login/aksi_login') ?>"  method="post" enctype="multipart/form-data" >
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="button">login</button>
        <!-- <input class="btn btn-success" type="submit" name="btn" value="login" data-dismiss="modal" /> -->
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </form>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Login -->
  <div id="mylogin2" class="modal fade" role="dialog">
    <div class="modal-dialog">
  <!-- Modal content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Login</h4>
    </div>
    <div class="modal-body">
      <form action="<?php echo base_url('login/loginpengunjung') ?>"  method="post" enctype="multipart/form-data" >
        <div class="form-group">
    <label for="username">NIP</label>
    <input type="text" class="form-control" id="username" name="NIP" placeholde="Username" required="">
        </div>
    <button type="submit" class="btn btn-success" name="button">login</button>
    <!-- <input class="btn btn-success" type="submit" name="btn" value="login" data-dismiss="modal" /> -->
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
        </div>
      </div>
    </div>
  </div>
<!-- End Modal Login -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url() ?>assets/menuutama/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/menuutama/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Custom scripts for this template -->
  <script src="<?php echo base_url() ?>assets/menuutama/js/coming-soon.min.js"></script>

</body>

</html>
