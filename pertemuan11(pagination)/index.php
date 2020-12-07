<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'function.php';


// Pagination
$jumlahDataPerHalaman = 1;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET['halaman']) )? $_GET['halaman'] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

// var_dump($halamanAktif);


// ambil data nya dari tabel mahasiswa
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

//tombol cari pada saat di klik

if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["search"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</nav>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="search" size="50" autofocus placeholder="Cari Data" autocomplete="off">
        <button type="submit" name="cari">Search</button>
    </form>
    <br><br>
    <!-- navigasi -->
    <?php if($halamanAktif > 1) :?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo</a>
    <?php endif; ?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <?php if($i == $halamanAktif) :?>
            <a href="?halaman=<?= $i; ?>" style = "font-weight: bold; color:red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
    <?php endfor; ?>

<!-- tombol continue -->
    <?php if($halamanAktif < $jumlahHalaman) :?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo</a>
    <?php endif; ?>

    <br>
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
</body>
</html>