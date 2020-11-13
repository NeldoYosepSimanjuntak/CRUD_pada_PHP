
<?php
$mahasiswa = [
    [
        "nama" => "neldo",
        "npm" => "223341",
        "jurusan" => "teknik informatika",
        "tugas" => [80,70,90],
        "gambar" => "profile.png"
    ],

    [
        "nama" => "putra",
        "npm" => "223344",
        "jurusan" => "teknik industri",
        "tugas" => [80,90,90],
        "gambar" => "profile3.png"
    ]
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li><a href="latihan2.php?gambar=<?= $mhs["gambar"]?>&nama=<?= $mhs["nama"]?>&npm=<?= $mhs["npm"]?>&jurusan=<?= $mhs["jurusan"]?>&tugas=<?= $mhs["tugas"][1]?>"><?= $mhs["nama"]?></a></li>
        
    </ul>
    <?php endforeach; ?>
</body>
</html>