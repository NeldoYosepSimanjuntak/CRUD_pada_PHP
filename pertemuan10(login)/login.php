<?php 
session_start();
require 'function.php';
//cek cookie nya
// if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
//     $id = $_COOKIE['id'];
//     $name = $_COOKIE['key'];
//     //ambil username berdasarkan id nya

//     $result = mysqli_query($conn,"SELECT username FROM user WHERE id = $id");
//     $row = mysqli_fetch_assoc($result);

//     //cek cookie dan username
//     if($key === hash('sha256', $row['username']) ){
//         $_SESSION['login'] = true;
//     }
// }

if(isset($_SESSION['login'])){
    header("Location: index.php");
    exit;
}

if( isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' ");

    //cek username nya terlebih dahulu
    if(mysqli_num_rows($result) === 1){
        //cek password nya terlebih dahulu
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){

            //set session
            $_SESSION['login'] = true;

            // cek remember me
            // if(isset($_POST['ingat'])){
            //     //buat cookie nya
            //     setcookie('id',$row['id'],  time() + 60);
            //     setcookie('key', hash("sha256", $row['username']), time() + 60);
            // }
            header("Location: index.php");
            exit;
        }
    }
    echo"<script> alert('username dan password anda salah') </script>";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Halaman Login</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username</label>
                <input type="text" id="username" name="user" placeholder="Masukkan username anda">
            </li>
            <li>
                <label for="password">Password</label>
                <input type="password" id="password" name="pass" placeholder="Masukkan password anda ">
            </li>
            <li>
                <input type="checkbox" id="remember" name="ingat" />
                <label for="remember">Remember me</label>
            </li>
            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </ul>
    
    </form>
</body>
</html>