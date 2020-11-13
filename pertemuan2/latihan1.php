<?php
// segitiga ke atas
// bintang 1
$a= 10;
for($i = 1; $i <= $a; $i++){
    for($j = 1; $j <= $i; $j++){
        echo"*";
    }
    echo"<br>";
}

// bintang ke 2
for($k = 5; $k > 0; $k--){
    for($l= 1; $l <= $k; $l++){
        echo"&nbsp";
    }
    for($m =5; $m >= $k; $m--){
        echo"*";
    }
    echo"<br>";
}

// bintang ke 3

for($b = 5; $b> 0 ; $b--){
    for($c = 1; $c <= $b; $c++){
        echo"&nbsp ";
    }
    for($d=5; $d >= $b; $d--){
        echo"*";
    }
    echo"<br>";
}
?>