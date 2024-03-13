<?php
// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id = $_POST['id_puskesmas'];
$nama = $_POST['nama_puskesmas'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Check if the file input "foto" is set and not empty
if (isset($_FILES['foto']) && !empty($_FILES['foto']['name'])) {
    // Informasi file yang diunggah
    $namafile = $_FILES['foto']['name']; // Nama file
    $dot = explode('.', $namafile);
    $ekstensi = strtolower(end($dot)); // Ekstensi file
    $ukuran = $_FILES['foto']['size']; // Ukuran file
    $file_temp = $_FILES['foto']['tmp_name']; // Lokasi sementara file

    // Penamaan file
    $image = md5(uniqid($namafile, true) . time()) . '.' . $ekstensi; // Nama file baru yang dienkripsi

    // Direktori penyimpanan file
    $target_dir = 'gambar/';

    // Proses upload gambar
    if (in_array($ekstensi, $allowed_extensions) === true) {
        // Validasi ukuran file
        if ($ukuran < 1500000) {
            // Pindahkan file yang diunggah ke direktori yang ditentukan
            if (move_uploaded_file($file_temp, $target_dir . $image)) {
                // Update data ke database
                $query = "UPDATE puskesmas SET nama_puskesmas='$nama', alamat='$alamat', deskripsi='$deskripsi', latitude='$latitude', longitude='$longitude', foto='$image' WHERE id_puskesmas='$id'";
                $result = mysqli_query($koneksi, $query);
                
                // Cek apakah update berhasil
                if ($result) {
                    echo "<script>alert('Data Berhasil Diedit!'); window.location = 'tampil_data_puskesmas.php'</script>";
                } else {
                    echo "<script>alert('Data Gagal Diedit!'); window.location = 'tampil_data_puskesmas.php'</script>";
                }
            } else {
                // Gagal mengunggah file
                echo "<script>alert('Gagal mengunggah file!'); window.location = 'tampil_data_puskesmas.php'</script>";
            }
        } else {
            // Jika file terlalu besar
            echo "<script>alert('Ukuran file terlalu besar!'); window.location = 'tampil_data_puskesmas.php'</script>";
        }
    } else {
        // Jika file tidak png, jpg, atau jpeg
        echo "<script>alert('Format file tidak sesuai!'); window.location = 'tampil_data_puskesmas.php'</script>";
    }
} else {
    // Jika $_FILES['foto'] tidak diatur atau kosong, data akan diupdate tanpa foto
    $query = "UPDATE puskesmas SET nama_puskesmas='$nama', alamat='$alamat', deskripsi='$deskripsi', latitude='$latitude', longitude='$longitude' WHERE id_puskesmas='$id'";
    $result = mysqli_query($koneksi, $query);
    
    // Cek apakah update berhasil
    if ($result) {
        echo "<script>alert('Data Berhasil Diedit!'); window.location = 'tampil_data_puskesmas.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Diedit!'); window.location = 'tampil_data_puskesmas.php'</script>";
    }
}
?>
