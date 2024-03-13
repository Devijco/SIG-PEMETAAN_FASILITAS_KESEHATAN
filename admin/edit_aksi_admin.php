<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "update admin set nama='$nama', username='$username', password='$password' WHERE id='$id'");
if ($koneksi) {
    echo "<script>alert('Data Berhasil Diedit!');window.location = 'tampil_data_admin.php' </script>";
} else {
    echo "<script>alert('Data Gagal Diedit!'); window.location = 'tampil_data_admin.php'</script>";
}
