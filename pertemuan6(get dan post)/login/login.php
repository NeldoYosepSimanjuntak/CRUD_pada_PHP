<?php 
if(isset($_POST["submit"])) {
    if($_POST["nama"] =="admin" && $_POST["kunci"] == "admin"){
        header("Location:admin.php");
    }
    else{
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<h1>Login Admin</h1>
    <?php if(isset($error)) : ?>
    <p style="color: red; font-style:italic">Username/password Salah </p>
    <?php endif; ?>


    <form  method="post">
        <li>
        <label for="username">Username</label>
        <input type="text" name="nama" id="username" placeholder="Masukkan username">
        </li>
        
        <br>
        <li>
        <label for="password">Password</label>
        <input type="password" name="kunci" id="password">
        </li>
        <br>
        <li>
            <button type="submit" name="submit">Kirim</button>
        </li>
    </form>
</body>
</html>