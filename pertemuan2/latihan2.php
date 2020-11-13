<?php
for($a=1; $a <= 10; $a++){
    for($b=1; $b <= $a; $b++){
        echo"&nbsp";
    }

    for($c=10; $c >= $a; $c--){
        echo"*";
    }

    echo"<br>";
}

for($d=5; $d >= 1; $d--){
    for($e=1; $e <= $d; $e++){
        echo"&nbsp ";
    }
    for($f=5; $f >= $d; $f--){
        echo"*";
    }
    echo"<br>";
}

// bintang 3
for($g=5; $g >= 1; $g--){
    for($h=5; $h >= $g; $h--){
        echo"*";
    }
    echo"<br>";
}
?>