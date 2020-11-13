<?php
if(!isset($_GET["nama"]) || !isset($_GET["npm"])|| !isset($_GET["gambar"])|| !isset($_GET["jurusan"])|| !isset($_GET["tugas"])){
    header("Location:latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil get dan post</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["npm"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["tugas"]; ?></li>
    </ul>
</body>
</html>