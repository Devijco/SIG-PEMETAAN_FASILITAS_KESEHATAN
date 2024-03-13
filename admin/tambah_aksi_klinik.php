<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama_klinik'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

//soal gambar
$allowed_extensions = array('png', 'jpg','jpeg');

// Check if the file input "foto" is set and not empty
if (isset($_FILES['foto']) && !empty($_FILES['foto']['name'])) {
    $namafile = $_FILES['foto']['name']; // mengambil nama file
    $dot = explode('.', $namafile);
    $ekstensi = strtolower(end($dot)); // mengambil ekstensi file
    $ukuran = $_FILES['foto']['size']; // mengambil ukuran file
    $file_temp = $_FILES['foto']['tmp_name']; // mengambil lokasi file

    // penamaan file -> enkripsi
    $image = md5(uniqid($namafile, true) . time()) . '.' . $ekstensi; // menggabungkan nama file yang dienkripsi

    // proses upload gambar
    if (in_array($ekstensi, $allowed_extensions) === true) {
        // validasi ukuran file
        if ($ukuran < 1500000) {
            move_uploaded_file($file_temp, 'gambar/' . $image);

            // menginput data ke database
            mysqli_query($koneksi, "insert into klinik values('','$nama','$alamat','$deskripsi','$latitude','$longitude','$image')");
            if ($koneksi) {
                echo "<script>alert('Data Berhasil Ditambahkan!'); window.location = 'tampil_data_klinik.php'</script>";
            } else {
                echo "<script>alert('Data Gagal Ditambahkan!'); window.location = 'tampil_data_klinik.php'</script>";
            }
        } else {
            // kalau file melebihi batas
            echo "<script>alert('Ukuran file terlalu besar!'); window.location = 'tampil_data_klinik.php'</script>";
        }
    } else {
        // kalau file tidak png atau jpg
        echo "<script>alert('Format file tidak sesuai!'); window.location = 'tampil_data_klinik.php'</script>";
    }
} else {
    // If $_FILES['foto'] is not set or empty
    echo "<script>alert('File foto tidak ada atau kosong!'); window.location = 'tampil_data_klinik.php'</script>";
}
