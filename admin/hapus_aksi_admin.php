<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id'];


// menghapus data dari database
$query = mysqli_query($koneksi, "delete from admin where id='$id'");
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'tampil_data_admin.php' </script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'tampil_data_admin.php'</script>";
}
?>