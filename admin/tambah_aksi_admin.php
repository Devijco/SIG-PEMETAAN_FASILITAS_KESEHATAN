<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO admin VALUES ('', '$nama', '$username', '$password')");
if ($koneksi) {
    echo "<script>alert('Data Berhasil Ditambahkan!'); window.location = 'tampil_data_admin.php'</script>";
} else {
    echo "<script>alert('Data Gagal Ditambahkan!'); window.location = 'tampil_data_admin.php'</script>";
}
