<?php 

// koneksi ke database
// $conn adalah variabel global
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $array = [];
    while($row = mysqli_fetch_assoc($result)){
        $array[] = $row;
    }
    return $array;
}

?>

