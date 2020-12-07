<?php 
require "../function.php";
$search = $_GET['keyword'];
$query = "SELECT * FROM mahasiswa where nama LIKE '%$search%' OR nrp LIKE '%$search%'OR jurusan LIKE '%$search%'";
$mahasiswa = query($query);
//var_dump($mahasiswa);
?>

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
                <a href="ubah.php?id=<?= $data['id']; ?>">ubah</a> |
                <a href="hapus.php?id= <?= $data['id']; ?>" onclick= "return confirm('Yakin Data di hapus?')">hapus</a>
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