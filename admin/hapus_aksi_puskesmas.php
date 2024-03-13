<?php
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id = $_GET['id_puskesmas'];

// ambil nama file gambar sebelum dihapus
$gambar = mysqli_query($koneksi, "select * from puskesmas where id_puskesmas='$id'");
$get = mysqli_fetch_array($gambar);
$img = 'gambar/' . $get['foto'];

// hapus file gambar dari server
unlink($img);

// menghapus data dari database
$query = mysqli_query($koneksi, "delete from puskesmas where id_puskesmas='$id'");
if ($query) {
    echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'tampil_data_puskesmas.php'</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!'); window.location = 'tampil_data_puskesmas.php'</script>";
}
?>
