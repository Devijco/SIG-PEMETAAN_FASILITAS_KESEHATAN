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
                        <h1 style="color: black; font-weight: bold;" class="h3 mb-0"><b>Edit Data User </b></h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><b>Edit Data</b></h6>
                        </div>
                        <div class="card-body">

                            <?php
                            include '../koneksi.php';
                            $id = $_GET['id_user'];
                            $query = mysqli_query($koneksi, "select * from user where id_user='$id'");
                            $data  = mysqli_fetch_array($query);
                            ?>

                            <!-- </div> -->
                            <div class="panel-body">
                                <form class="form-horizontal style-form" style="margin-top: 20px;" action="edit_aksi_user.php" method="post" enctype="multipart/form-data" name="form1" id="form1" onsubmit="return confirm('Yakin untuk mengedit?')">
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>ID User</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="id_user" type="text" id="id_user" class="form-control" value="<?php echo $data['id_user']; ?>" readonly />
                                            <!--<span class="help-block">A block of help text that breaks onto a new line and may extend beyond one line.</span>-->
                                        </div>
                                    </div>
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Nama User</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="nama" type="text" id="nama" class="form-control" value="<?php echo $data['nama']; ?>" required />
                                        </div>
                                    </div>

                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Username</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="username" class="form-control" id="username" type="text" value="<?php echo $data['username']; ?>" required />
                                        </div>
                                    </div>
                                    <div class="form-group" style="width: 700px;">
                                        <label style="font-weight: bold; color: black;" class="col-sm-2 col-sm-2 control-label"><b>Password</b></label>
                                        <div class="col-sm-8">
                                            <input style="font-weight: bold; color: black;" name="password" class="form-control" id="password" type="text" value="<?php echo $data['password']; ?>" required />
                                        </div>
                                    </div>
            
                                    <div class="form-group" style="margin-bottom: 20px;">
                                        <label class="col-sm-2 col-sm-2 control-label"></label>
                                        <div class="col-sm-8">
                                            <input type="submit" value="Update" class="btn btn-sm btn-primary" />&nbsp;
                                            <a onclick="return" class="btn btn-sm btn-danger" href="tampil_data_user.php">Kembali</a>
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