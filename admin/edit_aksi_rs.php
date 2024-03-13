<?php
// Koneksi database
include '../koneksi.php';

// Menangkap data yang dikirim dari form
$id = $_POST['id_rs'];
$nama = $_POST['nama_rs'];
$alamat = $_POST['alamat'];
$deskripsi = $_POST['deskripsi'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];

// Memeriksa apakah ada file yang diunggah
if (!empty($_FILES['foto']['name'])) {
    // Memindahkan file yang diunggah ke direktori yang ditentukan
    $target_dir = "gambar/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Memeriksa apakah file gambar yang diunggah valid
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Memeriksa apakah file sudah ada
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Memeriksa ukuran file
    if ($_FILES["foto"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Mengizinkan format file tertentu
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
        echo "Sorry, only JPG, JPEG, PNG files are allowed.";
        $uploadOk = 0;
    }

    // Jika tidak ada kesalahan, lanjutkan dengan upload file
    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["foto"]["name"])). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    
    // Update data ke database
    $query = "UPDATE rs SET nama_rs='$nama', alamat='$alamat', deskripsi='$deskripsi', latitude='$latitude', longitude='$longitude', foto='".$_FILES["foto"]["name"]."' WHERE id_rs='$id'";
    $result = mysqli_query($koneksi, $query);
    
    // Cek apakah update berhasil
    if ($result) {
        echo "<script>alert('Data Berhasil Diedit!');window.location = 'tampil_data_rs.php' </script>";
    } else {
        echo "<script>alert('Data Gagal Diedit!'); window.location = 'tampil_data_rs.php'</script>";
    }
} else {
    // Jika tidak ada file yang diunggah, update data tanpa foto
    $query = "UPDATE rs SET nama_rs='$nama', alamat='$alamat', deskripsi='$deskripsi', latitude='$latitude', longitude='$longitude' WHERE id_rs='$id'";
    $result = mysqli_query($koneksi, $query);
    
    // Cek apakah update berhasil
    if ($result) {
        echo "<script>alert('Data Berhasil Diedit!');window.location = 'tampil_data_rs.php' </script>";
    } else {
        echo "<script>alert('Data Gagal Diedit!'); window.location = 'tampil_data_rs.php'</script>";
    }
}
?>
