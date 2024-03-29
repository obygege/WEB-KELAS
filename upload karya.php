<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Karya</title>


    <style>

    body {
    background: linear-gradient(to right, #bfff00, #47541f);
    color: #333;
    font-family: 'Arial', sans-serif;
    text-align: center;
    margin: 0;
    padding: 20px;
    }

    h1 {
        color: black;
    }

    form {
        max-width: 400px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-bottom: 5px;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
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

    <h1>Form Upload Karya</h1>

    <form id="uploadForm" action="upload karya proses.php" method="post" enctype="multipart/form-data">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" required>

        <label for="deskripsi">Deskripsi:</label>
        <textarea name="deskripsi" rows="4" required></textarea>

        <label for="file">File:</label>
        <input type="file" name="file" accept="image/*,video/*" required>
        <button type="submit" onclick="upload()">Upload</button>
        

    <script>
        function upload() {
            alert('Upload Karya?');
            window.location.href = 'upload karya proses.php';
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

