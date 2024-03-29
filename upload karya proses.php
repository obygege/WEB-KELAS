<body>
<button type="submit" onclick="upload()">Kembali</button>
        

        <script>
            function upload() {
                alert('Terima Kasih telah mengupload karya anda');
                window.location.href = 'form admin.php';
            }
        </script>
</body>

<?php
// upload_process.php

// Membuat folder 'uploads/' jika belum ada
$uploadsDir = 'uploads/';
if (!file_exists($uploadsDir) && !is_dir($uploadsDir)) {
    mkdir($uploadsDir);
}

// Koneksi ke database (sesuaikan dengan informasi database Anda)
$conn = new mysqli('localhost', 'root', '', 'websitekuliah');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Tangkap data dari formulir
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];

// Tangkap informasi file yang diunggah
$namaFile = $_FILES['file']['name'];
$tipeFile = $_FILES['file']['type'];

// Tentukan lokasi penyimpanan file
$uploadDir = 'uploads/';
$uploadPath = $uploadDir . basename($namaFile);

// Pindahkan file ke lokasi penyimpanan
move_uploaded_file($_FILES['file']['tmp_name'], $uploadPath);

// Simpan informasi karya ke dalam database
$sql = "INSERT INTO karya1 (judul, deskripsi, tipe_file, nama_file) VALUES ('$judul', '$deskripsi', '$tipeFile', '$namaFile')";
$result = $conn->query($sql);

// Berikan respons dalam format JSON
$response = [];

if ($result) {
    $response['status'] = 'success';
    $response['message'] = 'Karya berhasil diunggah!';
} else {
    $response['status'] = 'error';
    $response['message'] = 'Error: ' . $sql . '<br>' . $conn->error;
}


// Tutup koneksi ke database
$conn->close();
?>

 
