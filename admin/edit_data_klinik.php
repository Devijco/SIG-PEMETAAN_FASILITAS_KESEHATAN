<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <?php include "menu_sidebar.php"; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <?php include "menu_topbar.php"; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid" style="width: 550px; margin-right: 1200px;">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="color: black; font-weight: bold;" class="h3 mb-0"><b>Edit Data Tempat Klinik</b></h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><b>Edit Data</b></h6>
                        </div>
                        <div class="card-body">

                            <?php
                            include '../koneksi.php';
                            $id = $_GET['id_klinik'];
                            $query = mysqli_query($koneksi, "select * from klinik where id_klinik='$id'");
                            $data  = mysqli_fetch_array($query);
                            ?>

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="edit_aksi_klinik.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return confirm('Yakin untuk mengedit?')">
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>ID Klinik</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="id_klinik" type="text" id="id_klinik" class="form-control" value="<?php echo $data['id_klinik']; ?>" readonly />
                                            <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                        </div>
                                    </div>
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Nama Klinik</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="nama_klinik" type="text" id="nama_klinik" class="form-control" value="<?php echo $data['nama_klinik']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Alamat</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="alamat" class="form-control" id="alamat" type="text" value="<?php echo $data['alamat']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Deskripsi</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="deskripsi" class="form-control" id="deskripsi" type="text" value="<?php echo $data['deskripsi']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Latitude</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="latitude" class="form-control" id="latitude" type="text" value="<?php echo $data['latitude']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Longitude</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="longitude" class="form-control" id="longitude" type="text" value="<?php echo $data['longitude']; ?>" required />
                                        </div>
                                        <div class="form-group" style="width: 930px;">
                                            <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-4 control-label"><b>Foto</b></label>
                                            <div class="col-sm-6">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="foto" accept="image/*" onchange="updateFileName(this)">
                                                <label class="custom-file-label" for="customFile"><?php echo (!empty($data['foto'])) ? $data['foto'] : "Pilih file"; ?></label>
                                            </div>
                                        </div>

                                        <script>
                                            function updateFileName(input) {
                                                var fileName = input.files[0] ? input.files[0].name : "Pilih file";
                                                var label = input.nextElementSibling;
                                                label.innerHTML = fileName;
                                            }
                                        </script>
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-8">
                                            <input type="submit" value="Update" class="btn btn-sm btn-primary" />&nbsp;
                                            <a onclick="return" class="btn btn-sm btn-danger" href="tampil_data_klinik.php">Kembali</a>
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <div class="container-fluid" style="width: 650px; bottom: 880px; left: 500px; position: relative;">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="color: black; font-weight: bold;" class="h3 mb-0"><b>Peta Daerah</b></h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        
                        <div class="card-body">

                    
      <input
        id="pac-input"
        class="controls"
        type="text"
        placeholder="Enter a location"
      />


    <div id="map" style="height: 665px;"></div>
    <div id="infowindow-content">
      <span id="place-name" class="title"></span><br />
      <span id="place-address"></span><br/>
      <span id="latitude-longitude"></span>

    </div>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8FQHJHpE0INbS5SHmVHXsLJX-gsXXnv0&callback=initMap&libraries=places&v=weekly"
      defer>
    </script>
                        </div>
                    </div>

                </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php include "footer.php"; ?>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
</body>

</html>