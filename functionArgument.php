<?php
//function parameter with default argument value
//biasanya kesalahan yg terjadi jika ada 2 parameter dan default value hanya ada diparameter awal, sehingga akan terjadi eror
//lebih baik jika default value ada diakhir
function hello($firstName, $lastName = "")
{
    echo "Hello $firstName $lastName" . PHP_EOL;
}
hello();
hello("kriti");
hello("kriti", "mauludin");

//type declaration function
function sum(int $a, int $b)
{
    $total = $a + $b;
    echo "$a + $b = $total" . PHP_EOL;
}
sum("100", "100");
sum(100, 100);
sum(true, false);
// error sum([], []);


/*

*Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
* Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
* Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
* Untuk membuat variable-length argument list, kita bisa menggunakan tanda … (titik tiga kali) sebelum nama argument

*/
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "total " . implode(",", $values) . " = $total" . PHP_EOL;
}
$values = [10, 5, 6, 8];
sumAll(10, 5, 6, 8);
sumAll(...$values);
