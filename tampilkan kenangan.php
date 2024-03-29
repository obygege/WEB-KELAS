<?php
// Koneksi ke database (sesuaikan dengan informasi database Anda)
$conn = new mysqli('localhost', 'root', '', 'websitekuliah');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari tabel 'karya'
$sql = "SELECT * FROM media1";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Karya</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 20px;
            text-align: center;
            background: linear-gradient(to right, #bfff00, #28a745);
        }

        .karya-card {
            border: 1px solid #ccc;
            background-color: rgba(255, 255, 255, 0.5);
            margin-bottom: 20px;
            padding: 15px;
        }

        .file-container {
            margin-top: 10px;
        }

        .btn-lihat {
            background-color: #bfff00;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-simpan {
            background-color: #2196F3;
            color: black;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>INI ADALAH HASIL DARI KARYA KAMI</h1>


<?php
// Loop untuk menampilkan data dari database
while ($row = $result->fetch_assoc()) {
    $id = $row['id'];
    $judul = $row['judul'];
    $deskripsi = $row['deskripsi'];
    $tipeMedia = $row['tipe_media'];
    $namaFile = $row['nama_file'];
    $tglUpload = $row['tgl_upload'];

    echo "<div class='karya-card'>
            <h2>$judul</h2>
            <p>$deskripsi</p>
            <p>Tanggal Upload: $tglUpload</p>
            <div class='file-container'>
                <a href='uploads/$namaFile' target='_blank' class='btn-lihat'>Lihat</a>
                <a href='simpan kenangan.php?id=$id' class='btn-simpan'>Simpan</a>
            </div>
        </div>";
}

// Tutup koneksi ke database
$conn->close();
?>
<button onclick="Beranda()">Beranda</button>


    <script>
        function Beranda() {
            alert('Kembali Ke halaman beranda?');
            window.location.href ='index.html';
        }
    </script>


</body>
</html>
