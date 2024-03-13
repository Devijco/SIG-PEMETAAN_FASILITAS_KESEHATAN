<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama_user'];
$username = $_POST['username'];
$password = $_POST['password'];

// menginput data ke database
mysqli_query($koneksi, "INSERT INTO user VALUES ('', '$nama', '$username', '$password')");
if ($koneksi) {
    echo "<script>alert('Data Berhasil Ditambahkan!'); window.location = 'index.php'</script>";
} else {
    echo "<script>alert('Data Gagal Ditambahkan!'); window.location = 'tambahuser.php'</script>";
}
?>
