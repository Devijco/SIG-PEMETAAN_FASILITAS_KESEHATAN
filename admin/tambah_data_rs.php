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
                <div class="container-fluid" style="width: 500px; margin-right: 1200px;">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="color: black; font-weight: bold;" class="h3 mb-0"><b>Tambah Data Rumah Sakit</b></h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><b>Tambah Data</b></h6>
                        </div>
                        <div class="card-body">

                            <!-- Main content -->
                            <form class="form-horizontal style-form" style="margin-top: 10px;" action="tambah_aksi_rs.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return confirm('Yakin untuk menambahkan data?')">
                                <div class="form-group" style="width: 850px;">
                                    <label  style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label" ><b>Nama Rumah Sakit</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;"  name="nama_rs" type="text" class="form-control" placeholder="Nama Rumah Sakit" required />
                                    </div>
                                </div>
                                <div class="form-group" style="width: 850px;">
                                    <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-4 control-label"><b>Alamat</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;" name="alamat" class="form-control" type="text" placeholder="Alamat" required />
                                    </div>
                                </div>
                                <div class="form-group" style="width: 850px;">
                                    <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-4 control-label"><b>Deskripsi</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;" name="deskripsi" class="form-control" type="text" placeholder="Deskripsi" required />
                                    </div>
                                </div>
                                <div class="form-group" style="width: 850px;">
                                    <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-4 control-label"><b>Latitude</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;" name="latitude" class="form-control" type="text" placeholder="-7.3811577" required />
                                    </div>
                                </div>
                                <div class="form-group" style="width: 850px;">
                                    <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-4 control-label"><b>Longitude</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;" name="longitude" class="form-control" type="text" placeholder="109.2550945" required />
                                    </div>
                                </div>
                                <div class="form-group" style="width: 850px;">
                                    <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-4 control-label"><b>Foto</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;" name="foto" class="form-control" accept="image/*" type="file" required />
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label class="col-sm-2 col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                        <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />
                                    </div>
                                </div>
                                <div style="margin-top: 20px;"></div>
                            </form>


                        </div>
                    </div>

                </div>

                <div class="container-fluid" style="width: 700px; bottom: 800px; left: 250px; position: relative;">
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


    <div id="map" style="height: 568px;"></div>
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