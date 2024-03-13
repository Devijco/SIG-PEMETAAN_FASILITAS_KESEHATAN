<!DOCTYPE html>
<html lang="en">
<?php include "admin/header.php"; ?>
<link rel="icon" href="tanahdatar.png">
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid" style="position: relative;">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 style="color: black; font-weight: bold;" class="h3 mb-0"><b>Menu Registrasi</b></h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><b>Tambah Data</b></h6>
                        </div>
                        <div class="card-body">

                            <!-- Main content -->
                            <form class="form-horizontal style-form" style="margin-top: 10px;" action="tambah_aksi_user.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                                <div class="form-group" style="width: 850px;">
                                    <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Nama User</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;" name="nama_user" type="text" class="form-control" placeholder="Nama User" required />
                                    </div>
                                </div>
                                <div class="form-group" style="width: 850px;">
                                    <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-4 control-label"><b>Username</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;" name="username" class="form-control" type="text" placeholder="Username" required />
                                    </div>
                                </div>
                                <div class="form-group" style="width: 850px;">
                                    <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-4 control-label"><b>Password</b></label>
                                    <div class="col-sm-6">
                                        <input style="font-weight: bold; color: black;" name="password" class="form-control" type="password" placeholder="password" required />
                                    </div>
                                </div>


                                <div class="form-group" style="margin-bottom: 20px;">
                                    <label class="col-sm-2 col-sm-4 control-label"></label>
                                    <div class="col-sm-8">
                                        <input type="submit" value="Simpan" class="btn btn-sm btn-primary" />
                                        <a onclick="return confirm('Yakin untuk ke halaman login ?')" class="btn btn-sm btn-danger" href="index.php">Kembali</a>
                                    </div>
                                </div>

                                <div style="margin-top: 20px;"></div>
                            </form>


                        </div>
                    </div>

                </div>


                <?php include "admin/footer.php"; ?>
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
</body>

</html>