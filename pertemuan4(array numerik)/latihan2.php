<?php
$mahasiswa =[
    ["neldo", "12345","teknik Informatika","neldo@neldo.com"],
    ["putra", "223344","sistem informasi","putra@putra.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan kasus array</title>
</head>
<body>
    <?php forEach($mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?= $mhs[0] ?></li>
        <li>NPM: <?= $mhs[1] ?></li>
        <li>Jurusan : <?= $mhs[2] ?></li>
        <li>email: <?= $mhs[3] ?></li>
        
    </ul>
    <?php endforEach; ?>
</body>
</html>