<?php
$angka = [[1,2,3],
[4,5,6],
[7,8,9]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study kasus</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            margin: 30px;
            background-color: lightgreen;
            line-height: 50px;
            text-align: center;
            float: left;
            transition: 1s;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
    <?php forEach($angka as $a) : ?>
        <?php forEach($a as $b) : ?>
            <div class="kotak"><?= $b; ?></div>
        <?php endforEach;?>
        <div class="clear"></div>
    <?php endforEach; ?>

</body>
</html>