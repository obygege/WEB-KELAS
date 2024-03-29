<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        body {
            background-color: #282c34;
            color: #bfff00;
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 20px;
            background-image: url('assets/images/HASIL.jpg');
            background-size: cover; /* Menyesuaikan ukuran gambar agar selalu mengisi area latar belakang */
            background-position: center; /* Menempatkan gambar di tengah-tengah latar belakang */
            background-repeat: no-repeat; /* Mencegah gambar diulang */
            color: #bfff00;
            font-family: 'Arial', sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            padding: 20px;

            /* Menambahkan efek blur menggunakan backdrop-filter */
            backdrop-filter: blur(10px); /* Sesuaikan nilai blur sesuai keinginan */
            -webkit-backdrop-filter: blur(10px); /* Mendukung juga pada browser berbasis Webkit (misalnya, Chrome, Safari) */
        }

        h1 {
            color: #bfff00;
        }

        button {
            background-color: #bfff00;
            color: #282c34;
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        button:hover {
            background-color: #63752f;
        }

        #berandaButton {
            position: relative;
        }


    </style>
</head>
<body>
    <h1>SELAMAT DATANG DI HALAMAN ADMIN</h1>

    <button onclick="uploadKarya()">Upload Karya</button>
    <button onclick="uploadKenangan()">Upload Kenangan</button>
    <button onclick="daftarAdmin()">Daftar Admin</button>
    <button id="berandaButton" onclick="Beranda()">Beranda</button>


    <script>
        function uploadKarya() {
            alert('Anda memilih untuk upload karya.');
            window.location.href = 'upload karya.php';
        }

        function uploadKenangan() {
            alert('Anda memilih untuk upload kenangan.');
            window.location.href = 'kenangan.php';
        }

        function daftarAdmin() {
            alert('Anda memilih untuk melihat daftar admin.');
            window.location.href = '';
        }

        function Beranda() {
            alert('Anda memilih untuk melihat Beranda.');
            window.location.href = 'index.html';
        }
    </script>
</body>
</html>
