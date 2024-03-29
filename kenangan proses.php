<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Media</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            padding: 20px;
        }

        .media-card {
            border: 1px solid #ccc;
            margin-bottom: 20px;
            padding: 15px;
        }

        .btn-container {
            margin-top: 10px;
        }

        .btn-lihat, .btn-unduh {
            background-color: ##bfff00;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        .btn-unduh {
            background-color: #28a745;
        }
    </style>
</head>
<body>

    <?php
    // Lakukan koneksi ke database (sesuaikan dengan informasi database Anda)
    $conn = new mysqli('localhost', 'root', '', 'websitekuliah');

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil data dari tabel 'media1'
    $sql = "SELECT * FROM media1";
    $result = $conn->query($sql);

    // Loop untuk menampilkan data media dari database
    while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $judul = $row['judul'];
        $deskripsi = $row['deskripsi'];
        $tipeMedia = $row['tipe_media'];
        $namaFile = $row['nama_file'];

        echo "<div class='media-card'>
                <h2>$judul</h2>
                <p>$deskripsi</p>
                <div class='btn-container'>
                    <button class='btn-lihat' onclick='lihatMedia($id, \"$tipeMedia\", \"$namaFile\")'>Lihat</button>
                    <button class='btn-unduh' onclick='unduhMedia($id, \"$tipeMedia\", \"$namaFile\")'>Unduh</button>
                </div>
            </div>";
    }

    // Tutup koneksi ke database
    $conn->close();
    ?>

    <!-- Script untuk lihatMedia dan unduhMedia (JavaScript) -->
    <script>
        function lihatMedia(id, tipeMedia, namaFile) {
            // Implementasikan logika untuk melihat media (sesuai tipe media)
            alert('Melihat media dengan ID ' + id);
        }

        function unduhMedia(id, tipeMedia, namaFile) {
            // Implementasikan logika untuk mengunduh media (sesuai tipe media)
            alert('Mengunduh media dengan ID ' + id);
        }
    </script>

</body>
</html>
