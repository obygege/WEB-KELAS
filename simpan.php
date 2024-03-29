<?php
// Ambil id dari parameter GET
$id = $_GET['id'];

// Koneksi ke database (sesuaikan dengan informasi database Anda)
$conn = new mysqli('localhost', 'root', '', 'websitekuliah');

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data karya berdasarkan id
$sql = "SELECT * FROM karya1 WHERE id = $id";
$result = $conn->query($sql);

// Periksa apakah data ditemukan
if ($result->num_rows > 0) {
    // Ambil data karya
    $row = $result->fetch_assoc();
    $judul = $row['judul'];
    $deskripsi = $row['deskripsi'];
    $namaFile = $row['nama_file'];
    $tglUpload = $row['tgl_upload'];

    // Simpan data karya ke dalam tabel 'karya_simpan'
    $sqlSimpan = "INSERT INTO karya1 (judul, deskripsi, nama_file, tgl_upload) VALUES ('$judul', '$deskripsi', '$namaFile', '$tglUpload')";
    $resultSimpan = $conn->query($sqlSimpan);

    // Periksa apakah simpan berhasil
    if ($resultSimpan) {
        echo "Data berhasil disimpan! <br>";
        echo "<a href='uploads/$namaFile' download>Unduh File</a><br>";
    } else {
        echo "Error: " . $sqlSimpan . "<br>" . $conn->error;
    }
} else {
    echo "Data tidak ditemukan.";
}
echo "<a href='outputimage.php'>Kembali</a>";
// Tutup koneksi ke database
$conn->close();
?>
