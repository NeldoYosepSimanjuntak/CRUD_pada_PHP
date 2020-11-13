<?php 
// array
// cara lama

// $hari = array("senin", "selasa", "rabu");
// $bulan = ["januari", "februari","maret"];
// print_r($hari);
// echo"<br>";
// print_r($bulan[0]);

// cara menambah sebuah array
// echo"<br>";
// $hari[] = "kamis";
// $hari[] = "jum'at";
// var_dump($hari);


$angka = [1,200,3,67,88,1000,100];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
    <style>
        .array{
            background-color: salmon;
            width: 50px;
            height: 50px;
            margin: 50px;
            text-align: center;
            line-height: 45px;
            float: left;
        }

        .clear{
            clear: both; //untuk membersihkan float nya
        }
    </style>
</head>
<body>
    <!-- cara ke 1 -->
<?php for($i=0; $i < count($angka); $i++ ): ?>
    <div class="array"><?= $angka[$i]; ?></div>

    <?php endfor ?>
    <div class="clear"></div>

    <!-- cara ke 2 -->

    <?php forEach($angka as $a) : ?>
        <div class="array"><?= $a; ?></div>

    <?php endforEach; ?>
</body>
</html>