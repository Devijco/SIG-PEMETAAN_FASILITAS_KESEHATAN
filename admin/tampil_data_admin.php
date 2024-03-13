<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../tampil_data_admin.php?pesan=belum_login");
}
include "../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php include "header.php"; ?>
<style>
    .zoom {
        width: 100px;
    }

    .zoom:hover {
        transform: scale(3);
        transition: 0.5s ease;
    }
</style>

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

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 style="font-weight: bold;" class="m-0 font-weight-bold text-primary"><b>Data Admin</b></h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="color: black; font-weight: bold;"><b>NO</b></th>
                                            <th style="text-align: center; color: black; font-weight: bold;"><b>Nama</b> </th>
                                            <th style="text-align: center; color: black; font-weight: bold;"><b>Username</b></th>
                                            <th style="text-align: center; color: black; font-weight: bold;"><b>Aksi</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 0;
                                        $data = mysqli_query($koneksi, "select * from admin");
                                        while ($d = mysqli_fetch_array($data)) {
                                            $no++;

                                        ?>
                                            <tr>
                                                <td style="color: black; font-weight: bold;"><b><?php echo $no ?></b></td>
                                                <td style="color: black; font-weight: bold;"><b><?php echo $d['nama']; ?></b></td>
                                                <td style="color: black; font-weight: bold;"><b><?php echo $d['username']; ?></b></td>
                                                <td>
                                                    <div style="text-align: center;">
                                                        <a href="edit_data_admin.php?id=<?php echo $d['id'];?>" class="btn-sm btn-primary"><span class="fas fa-edit"></span></a>
                                                        <a onclick="return confirm('Yakin menghapus data ini ?')" class="btn-sm btn-danger" href="hapus_aksi_admin.php?id=<?php echo $d['id']; ?>"><span class="fas fa-trash"></span></a>
                                                    </div>
                                                </td>
                                            </tr>
                            </div>
                        <?php
                                        }
                        ?>
                        </tbody>
                        </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include "footer.php"; ?>

    </div>
    <!-- End of Page Wrapper -->