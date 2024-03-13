<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id_user'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "update user set nama='$nama', username='$username', password='$password' WHERE id_user='$id'");
if ($koneksi) {
    echo "<script>alert('Data Berhasil Diedit!');window.location = 'tampil_data_user.php' </script>";
} else {
    echo "<script>alert('Data Gagal Diedit!'); window.location = 'tampil_data_user.php'</script>";
}
