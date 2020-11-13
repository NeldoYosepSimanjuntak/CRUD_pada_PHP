<?php 
echo date("l, d-M-Y");

function salam($waktu= "datang", $nama="admin"){
    return "selamat $waktu, $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan function</title>
</head>
<body>
    <?= salam("malam","neldo");?>
</body>
</html>