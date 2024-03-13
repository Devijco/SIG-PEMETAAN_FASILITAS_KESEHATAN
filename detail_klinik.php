<?php include "header.php"; ?>
<?php
$id = $_GET['id_klinik'];
include_once "ambil_klinik.php";
$obj = json_decode($data);
$id_klinik = "";
$nama_klinik = "";
$alamat = "";
$deskripsi = "";
$lat = "";
$long = "";
foreach ($obj->results as $item) {
  $id_klinik = $item->id_klinik;
  $nama_klinik = $item->nama_klinik;
  $alamat = $item->alamat;
  $deskripsi = $item->deskripsi;
  $lat = $item->latitude;
  $long = $item->longitude;
}

$title = "Detail dan Lokasi : " . $nama_klinik;
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8FQHJHpE0INbS5SHmVHXsLJX-gsXXnv0&callback=myMap"></script>
<style>
  .zoom {
    width: 100px;
  }

  .zoom:hover {
    transform: scale(3);
    transition: 0.5s ease;
  }
</style>
<script>
  function initialize() {
    var myLatlng = new google.maps.LatLng(<?php echo $lat ?>, <?php echo $long ?>);
    var mapOptions = {
      zoom: 13,
      center: myLatlng
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var contentString = '<div id="content">' +
      '<div id="siteNotice">' +
      '</div>' +
      '<h1 id="firstHeading" class="firstHeading"><?php echo $nama_klinik ?></h1>' +
      '<div id="bodyContent">' +
      '<p><?php echo $alamat ?></p>' +
      '</div>' +
      '</div>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });

    var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Maps Info',
      icon: 'img/clinic.png'
    });
    google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map, marker);
    });
  }

  google.maps.event.addDomListener(window, 'load', initialize);
</script>

<!-- start banner Area -->
<section class="about-banner relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center">
      <div class="about-content col-lg-12">
        <h1><b>
        Detail Informasi Geografis Klinik
        </b>
        </h1>
      </div>
    </div>
  </div>
</section>
<!-- End banner Area -->
<!-- Start about-info Area -->
<section class="about-info-area section-gap">
  <div class="container" style="padding-top: 20px;">
    <div class="row">

      <div class="col-md-7" data-aos="fade-up" data-aos-delay="200">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 style="font-size: large;" class="panel-title"><strong>Informasi klinik </strong></h4>
          </div>
          <div class="panel-body">
            <table class="table">
              <tr>
                <th style="font-size: x-large;"><b>Detail</b></th>
              </tr>
              <tr>
                <td style="font-size: x-large;"><b>Nama klinik</b></td>
                <td>
                  <h4><b><?php echo $nama_klinik ?></b></h4>
                </td>
              </tr>
              <tr>
                <td style="font-size: x-large;"><b>Alamat</b></td>
                <td>
                  <h4><b><?php echo $alamat ?></b></h4>
                </td>
              </tr>
              <tr>
                <td style="font-size: x-large;"><b>Deskripsi</b></td>
                <td>
                  <h4><b><?php echo $deskripsi ?></b></h4>
                </td>
              </tr>
              <tr>
                <td style="font-size: x-large;"><b>Foto</b></td>
                <td>
                  <?php if (!empty($item->foto)) : ?>
                    <img src="admin/gambar/<?php echo $item->foto; ?>" alt="Foto klinik" style="max-width: 100px; max-height: 100px;" class="zoom">
                  <?php else : ?>
                    No Photo
                  <?php endif; ?>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>

      <div class="col-md-5" data-aos="zoom-in">
        <div class="panel panel-info panel-dashboard">
          <div class="panel-heading centered">
            <h2 style="font-size: large;" class="panel-title"><strong>Lokasi</strong></h4>
          </div>
          <div class="panel-body">
            <div id="map-canvas" style="width:100%;height:380px;"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End about-info Area -->
</div>
</div>
</div>
</div>
</div>
</div>
<?php include_once "footer.php"; ?>
