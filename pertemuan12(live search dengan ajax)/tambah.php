<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'function.php';

 if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){
        echo " <script>
                alert('data berhasil di tambahkan ');
                document.location.href= 'index.php' ;
                </script>";
    }else{
        echo " <script>
        alert('data gagal di tambahkan ');
        document.location.href= 'tambah.php' ;
        </script>";
    }
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Form Data Mahasiswa </h1>
    <form action="" method="post" enctype="multipart/form-data">

        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp" required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" required></li>
            <li>
                <button type="submit" name="submit"> Tambah Data </button>
            </li>
        </ul>
    </form>
</body>
</html>