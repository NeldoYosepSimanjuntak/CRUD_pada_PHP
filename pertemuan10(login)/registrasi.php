<?php 
require 'function.php';
if(isset($_POST['submit'])){
    if(register($_POST) > 0) {
        echo " <script>
                    alert('user berhasil di tambahkan');
                </script>
        "; 
    } else{
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Registrasi</h1>

    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username" name="user" required>
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" id="password" name="pass" required>
            </li>
            <li>
                <label for="konfirmPassword"> Konfirmasi Password</label>
                <input type="password" id="konfirmPassword" name="pass1">
            </li>

            <li>
                <button type="submit" name="submit">Register</button>
            </li>
        </ul>
    </form>
</body>
</html>