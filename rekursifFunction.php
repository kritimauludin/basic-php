<?php
/**
 * Recursive function adalah kemampuan function memanggil function dirinya sendiri
 * Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial
 */

//tanpa rekursif
function faktorialLoop(int $value): int{
    $total = 1;
    for($i=1; $i<=$value; $i++){
        $total *= $i;
    }
    return $total;
}
var_dump(faktorialLoop(5));

function faktorialRekursif(int $value): int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * faktorialRekursif($value - 1);
    }
}
var_dump(faktorialRekursif(5)) . PHP_EOL;


//salah satu problem adalah jika rekursif terlalu dalam akan terjadi memory overflow
//karena ketika lakukan rekursif maka sebenarnya function disimpan dalam stack
function loop(int $value)
{
    if ($value == 0) {
        echo "end loop" . PHP_EOL;
    } else {
        echo "loop ke $value" . PHP_EOL;
        loop($value - 1);
    }
}

// loop(3000000);
