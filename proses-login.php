<?php
include_once 'HALAMAN ADMIN/database.php';
$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($kon, "SELECT * FROM tbl_users where username='$username' and password='$password' ");

$cek = mysqli_num_rows($login); 

if($cek > 0){
    $data = mysqli_fetch_assoc($login);
    $nama = $nama['nama'];
    header("Location: form admin.php");
    echo "Berhasil. Anda login sebagai $nama!";
}else{
    echo "<h1 style='color: red; text-align: center;'>MAAF ANDA SALAH MEMASUKKAN USERNAME ATAU PASSWORD</h1>";
    echo "<h2 style='color: red; text-align: center;'>MUNGKIN ANDA BELUM MENDAFTAR</h2>";
    echo "<a href='login.php'>Login Kembali</a>";
}
?>