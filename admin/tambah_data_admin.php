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
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="color: black; font-weight: bold;" class="h3 mb-0"><b>Tambah Data Admin </b></h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><b>Tambah Data</b></h6>
                        </div>
                        <div class="card-body">

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="tambah_aksi_admin.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return confirm('Yakin untuk menambahkan data?')">
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Nama Admin</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="nama" type="text" id="nama" class="form-control" required />
                                        </div>
                                    </div>

                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Username</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="username" class="form-control" id="username" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Password</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="password" class="form-control" id="password" type="password" required />
                                        </div>
                                    </div>
            
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-8">
                                            <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                                            <a onclick="return" class="btn btn-sm btn-danger" href="tampil_data_admin.php">Kembali</a>
                                        </div>
                                    </div>
                                    <div style="margin-top: 20px;"></div>
                                </form>
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