<?php
include_once 'koneksi.php';

$media_type = $_POST['media_type'];

if($media_type == 'foto') {
    $target_dir = "uploads/foto/";
} else {
    $target_dir = "uploads/video/";
}

$target_file = $target_dir . basename($_FILES["file"]["name"]);

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Periksa apakah file benar-benar gambar atau video (sesuai dengan kebutuhan)
if($media_type == 'foto') {
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File yang Anda unggah bukan gambar.";
        $uploadOk = 0;
    }
} else {
    // Untuk video, Anda bisa menambahkan validasi yang sesuai dengan kebutuhan
}

// Periksa apakah file sudah ada
if (file_exists($target_file)) {
    echo "Maaf, file sudah ada.";
    $uploadOk = 0;
}

// Batasi ukuran file jika diperlukan (misalnya, maksimum 5MB)
if ($_FILES["file"]["size"] > 5000000) {
    echo "Maaf, file terlalu besar. Maksimum 5MB.";
    $uploadOk = 0;
}

// Mengizinkan beberapa tipe file
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov") {
    echo "Maaf, hanya file JPG, JPEG, PNG, MP4, AVI, dan MOV yang diperbolehkan.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Maaf, file tidak dapat diunggah.";
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        $file_name = basename($_FILES["file"]["name"]);

        $query = "INSERT INTO media (file_name, file_type) VALUES ('$file_name', '$media_type')";
        if(mysqli_query($conn, $query)) {
            echo "Media berhasil diunggah.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Maaf, terjadi kesalahan saat mengunggah file.";
    }
}

mysqli_close($conn);
?>
