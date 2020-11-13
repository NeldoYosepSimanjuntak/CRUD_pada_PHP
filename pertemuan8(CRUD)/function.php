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

// tambah data
function tambah($data){
    global $conn; 

    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO mahasiswa VALUES('', '$nama', '$nrp', '$email', '$gambar','$jurusan')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data['id'];
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $gambar = htmlspecialchars($data['gambar']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $email = htmlspecialchars($data['email']);

    $db = " UPDATE mahasiswa SET
        nama = '$nama',
        nrp = '$nrp',
        email = '$email',
        gambar = '$gambar',
        jurusan = '$jurusan'

        where id = $id
    ";
    mysqli_query($conn, $db);
    return mysqli_affected_rows($conn);

}

?>

