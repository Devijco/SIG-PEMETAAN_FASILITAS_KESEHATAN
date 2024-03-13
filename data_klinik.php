<?php
$title = "Daftar Data Klinik";
include_once "header.php";
include_once "koneksi.php"; ?>
<style>
  .zoom {
    width: 100px;
  }

  .zoom:hover {
    transform: scale(3);
    transition: 0.5s ease;
  }
</style>

<!-- Start about-info Area -->
<div class="row">
  <div class="col-md-12">
    <div class="panel panel-info panel-dashboard">
      <div class="panel-heading centered">
        <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
      </div>
      <div class="panel-body">
        <table class="table table-bordered table-striped table-admin">
          <thead>
            <tr>
            <th width="10%">No.</th>
              <th width="30%">Foto</th>
              <th width="20%">Nama Klinik</th>
              <th width="30%">Alamat</th>
              <th width="20%">Aksi</th>
            </tr>
          </thead>
          <tbody>
          <?php
            $no = 0;
            $data = mysqli_query($koneksi, "select * from klinik");
            while ($d = mysqli_fetch_array($data)) {
              $no++;
            ?>
                <tr>
                  <td><b><?php echo $no; ?></b></td>
                  <td style="text-align: center">
                  <?php if (!empty($d['foto'])) : ?>
                    <img src="admin/gambar/<?php echo $d['foto']; ?>" alt="Foto KLINIK" style="max-width: 100px; max-height: 100px;" class="zoom">
                  <?php else : ?>
                    No Photo
                  <?php endif; ?>
                  </td>
                  <td style="font-size: large;"><b><?php echo $d['nama_klinik']; ?></b></td>
                  <td style="font-size: large;"><b><?php echo $d['alamat']; ?></b></td>
                  <td>
                  <a href="detail_klinik.php?id_klinik=<?php echo $d['id_klinik']; ?> " rel="tooltip" data-original-title="Lihat File" data-placement="top" class="btn btn-primary">
                        <i class="fa fa-map-marker"> </i> <b>Detail dan Lokasi</b></a>&nbsp;
                  </td>
                </tr>
                <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- End about-info Area -->
<?php include_once "footer.php" ?>