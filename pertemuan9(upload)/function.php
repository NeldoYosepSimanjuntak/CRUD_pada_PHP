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
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);
    
    // upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO mahasiswa VALUES('', '$nama', '$nrp', '$email', '$gambar','$jurusan')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    //cek apakah tidak ada gambar yang di upload

    if($error === 4){
        echo " <script>
                    alert('masukkan gambar terlebih dahulu');
                </script>";

                return false;
    }

    // cek apakah gambar yang di upload  gambar apa bukan 

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo " <script>
        alert('Yang anda upload bukan gambar');
    </script>";
    return false;
    }
    // cek jika gambar terlalu besar
    if($ukuranFile > 1000000){
        echo "<script>
        alert('ukuran file terlalu besar');
    </script>";
    return false;
    }
    //generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru;

}



// function hapus
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id ");
    return mysqli_affected_rows($conn);
}

// function ubah
function ubah($data){
    global $conn;
    $id = $data['id'];
    $nrp = htmlspecialchars($data['nrp']);
    $nama = htmlspecialchars($data['nama']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $email = htmlspecialchars($data['email']);
    $gambarLama = htmlspecialchars($data['gambarLama']);
    if($_FILES['gambar']['error']=== 4){
        $gambar = $gambarLama;
    }else{
        
        $gambar = upload();
    }
    //cek apakah user ganti gambar baru atau tidak

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

// function cari

function cari($search){
    $query = "SELECT * FROM mahasiswa where nama LIKE '%$search%' OR nrp LIKE '%$search%'";
    return query($query);
}

?>

