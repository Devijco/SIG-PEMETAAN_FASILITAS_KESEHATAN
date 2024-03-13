<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIG FASILITAS KESEHATAN TANAH DATAR</title>
  <link rel="icon" href="tanahdatar.png">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/datatable-bootstrap.css" rel="stylesheet">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="tengah">
        <div class="head-depan tengah">
          <div class="row">
            <div class="col-md-1">
              <a href="halamanutama.php"><img src="admin/img/tanahdatar.png" width="80px" height="100px" alt="" title="" /></a>

            </div>
            <div class="col-md-11">
              <h1><b>Sistem Informasi Geografis Fasilitas Kesehatan</b></h1>
              <p><i class="fa fa-map-marker fa-fw"></i><b> KABUPATEN TANAH DATAR</b></p>
            </div>
          </div>
          <hr class="hr1 margin-b-10" />
        </div>
      </div>
    </div>
  </div>
  <div class="container margin-b70">
    <nav class="navbar navbar-default navbar-utama" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Status</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li><a href="halamanutama.php"><i class="fa fa-home"></i><b> HALAMAN DEPAN</b> </a></li>
          <li><a href="data_rs.php"><i class="fa fa-list-ul"></i><b> DATA RUMAH SAKIT</b> </a></li>
          <li><a href="data_puskesmas.php"><i class="fa fa-list-ul"></i><b> DATA PUSKESMAS</b> </a></li>
          <li><a href="data_klinik.php"><i class="fa fa-list-ul"></i><b> DATA KLINIK</b> </a></li>
          <li><a href="peta_rs.php"><i class="fa fa-map-marker"></i><b> PETA PERSEBARAN RUMAH SAKIT</b> </a></li>
          <li><a href="peta_puskesmas.php"><i class="fa fa-map-marker"></i><b> PETA PERSEBARAN PUSKESMAS</b> </a></li>
          <li><a href="peta_klinik.php"><i class="fa fa-map-marker"></i> <b> PETA PERSEBARAN KLINIK</b></a></li>
          <li><a onclick="return confirm('Yakin untuk logout ini ?')" class="fa fa-home" href="index.php"><b> LOGOUT</b> </a></li>

        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>