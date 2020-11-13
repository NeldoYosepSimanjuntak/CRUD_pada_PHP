<?php 

require 'function.php';

// ambil data nya dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <table border = "1" cellpadding="10" cellspacing= "0">
        <tr>
            <th>id</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nama</th>
            <th>nrp</th>
            <th>jurusan</th>
            <th>email</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $data ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $data["gambar"]; ?>" width="50px">
            </td>
            <td><?= $data["nama"]; ?></td>
            <td><?= $data["nrp"]; ?></td>
            <td><?= $data["jurusan"]; ?></td>
            <td><?= $data["email"]; ?></td>
        </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    
    </table>
</body>
</html>