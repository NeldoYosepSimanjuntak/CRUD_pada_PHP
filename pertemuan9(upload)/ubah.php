<?php 
require 'function.php';
$id = $_GET["id"];
$mhs = query("SELECT * FROM mahasiswa where id = $id")[0];
// var_dump($mhs["nama"]);

 if(isset($_POST["submit"])){
    if(ubah($_POST) > 0){
        echo " <script>
                alert('data berhasil di ubah ');
                document.location.href= 'index.php' ;
                </script>";
    }else{
        echo " <script>
        alert('data gagal di ubah ');
        document.location.href= 'ubah.php' ;
        </script>";
    }
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
</head>
<body>
    <h1>Form Ubah Data Mahasiswa </h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs['id']; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mhs['gambar']; ?>">
        <ul>
            <li>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama"  value ="<?= $mhs['nama']; ?> " required>
            </li>
            <li>
                <label for="nrp">NRP: </label>
                <input type="text" name="nrp" id="nrp" value = "<?= $mhs['nrp']; ?>"required>
            </li>
            <li>
                <label for="gambar">Gambar</label>
                <img src="img/<?= $mhs['gambar']?>" width="60px">
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" value="<?= $mhs['jurusan']?>" required>
            </li>
            <li>
                <label for="email">Email: </label>
                <input type="text" name="email" id="email" value = "<?= $mhs['email']; ?>" required></li>
            <li>
                <button type="submit" name="submit"> Ubah Data </button>
            </li>
        </ul>
    </form>
</body>
</html>