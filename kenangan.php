<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Media</title>

    <style>
         body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(to right, #bfff00, #47541f);
        }

        h1 {
            padding: 20px;
            color: blue;
        }

        form {
            max-width: 400px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #333;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        button {
            background-color: #bfff00;
            color: black;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #47541f;
        }
    </style>
</head>
<body>

<?php
// Cek apakah terdapat pemberitahuan dalam URL
if (isset($_GET['status']) && isset($_GET['message'])) {
    $status = $_GET['status'];
    $message = $_GET['message'];

    // Tampilkan pemberitahuan menggunakan SweetAlert2
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@10'></script>
    <script>
        Swal.fire({
            icon: '$status',
            title: 'Notification',
            text: '$message',
        });
    </script>";
}
?>

    <h1>Form Upload Media</h1>

    <form id="uploadForm" action="kenangan proses.php" method="post" enctype="multipart/form-data">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" rows="4" required></textarea>

        <label for="file">File:</label>
        <input type="file" name="file" accept="image/*,video/*" required>

        <button type="submit" onclick="Beranda()">Upload</button>


    <script>
        function Beranda() {
            alert('Yakin Untuk mengupload?  setelah proses upload berhasil maka anda akan langsung menuju kehalaman dashboard admin');
            window.location.href ='kenangan proses.php';
        }
    </script>

<button type="submit" onclick="kembali()">Kembali</button>
        

        <script>
            function kembali() {
                alert('Anda akan menuju kehalaman sebelumnya!!');
                window.location.href = 'form admin.php';
            }
        </script>

    </form>

</body>
</html>
