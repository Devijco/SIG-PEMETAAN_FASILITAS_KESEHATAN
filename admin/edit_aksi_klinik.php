<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id_klinik'];
$nama = $_POST['nama_klinik'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

//soal gambar
$allowed_extensions = array('png', 'jpg', 'jpeg');

// Check if the file input "foto" is set and not empty
if (isset($_FILES['foto']) && !empty($_FILES['foto']['name'])) {
    $namafile = $_FILES['foto']['name']; // mengambil nama file
    $dot = explode('.', $namafile);
    $ekstensi = strtolower(end($dot)); // mengambil ekstensi file
    $ukuran = $_FILES['foto']['size']; // mengambil ukuran file
    $file_temp = $_FILES['foto']['tmp_name']; // mengambil lokasi file

    // penamaan file
    $image = $namafile; // menggunakan nama file asli tanpa enkripsi

    // proses upload gambar
    if (in_array($ekstensi, $allowed_extensions) === true) {
        // validasi ukuran file
        if ($ukuran < 1500000) {
            // pindahkan file yang diunggah ke direktori yang ditentukan
            if (move_uploaded_file($file_temp, 'gambar/' . $image)) {
                // update data ke database
                $query = "UPDATE klinik SET nama_klinik='$nama', alamat='$alamat', deskripsi='$deskripsi', latitude='$latitude', longitude='$longitude', foto='$image' WHERE id_klinik='$id'";
                $result = mysqli_query($koneksi, $query);
                
                // cek apakah update berhasil
                if ($result) {
                    echo "<script>alert('Data Berhasil Diedit!'); window.location = 'tampil_data_klinik.php'</script>";
                } else {
                    echo "<script>alert('Data Gagal Diedit!'); window.location = 'tampil_data_klinik.php'</script>";
                }
            } else {
                // gagal mengunggah file
                echo "<script>alert('Gagal mengunggah file!'); window.location = 'tampil_data_klinik.php'</script>";
            }
        } else {
            // jika file terlalu besar
            echo "<script>alert('Ukuran file terlalu besar!'); window.location = 'tampil_data_klinik.php'</script>";
        }
    } else {
        // jika file tidak png, jpg, atau jpeg
        echo "<script>alert('Format file tidak sesuai!'); window.location = 'tampil_data_klinik.php'</script>";
    }
} else {
    // jika $_FILES['foto'] tidak diatur atau kosong, data akan diupdate tanpa foto
    $query = "UPDATE klinik SET nama_klinik='$nama', alamat='$alamat', deskripsi='$deskripsi', latitude='$latitude', longitude='$longitude' WHERE id_klinik='$id'";
    $result = mysqli_query($koneksi, $query);
    
    // cek apakah update berhasil
    if ($result) {
        echo "<script>alert('Data Berhasil Diedit!'); window.location = 'tampil_data_klinik.php'</script>";
    } else {
        echo "<script>alert('Data Gagal Diedit!'); window.location = 'tampil_data_klinik.php'</script>";
    }
}
?>
