//ambil elemen elemen yang di butuhkan

const cari = document.getElementById("keyword");
const tombol = document.getElementById("tombol-cari");
const container = document.getElementById("container");

// tambahkan event ketika keyword di tulis
cari.addEventListener("keyup", function() {
    
    //buat objek ajax nya
    let xhr = new XMLHttpRequest();
    //cek kesiapan ajax nya
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            container.innerHTML = xhr.responseText;
        }
    }
    xhr.open("GET", "ajax/mahasiswa.php?keyword=" + cari.value, true)
    xhr.send();
})