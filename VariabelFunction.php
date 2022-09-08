<?php
/*
* PHP mendukung konsep yang bernama variable function
* Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat disebuah variable
* Untuk menggunakan variable function, kita bisa secara langsung memanggil $namaVariable(), 
  jika ingin menambahkan argument, kita bisa menggunakan $namaVariable(argument)
*/

function foo(){
    echo "foo". PHP_EOL;
}

function bar(){
    echo "bar". PHP_EOL;
}
//dengan kemmapuan ini kita bisa memasukan argument dengan memanggil function lain
$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

//contoh penggunaan untuk memanggil function strtoupper
function getName(string $name, $filter)
{
    //istilah yg lebih dikenal adalah callback
    $finalName = $filter($name);
    echo "Hello $finalName" . PHP_EOL;
}

function sampleFunction(string $name): string{
    return "Sample $name" . PHP_EOL;
}

getName("Kriti", "sampleFunction");
getName("Kriti", "strtoupper");
getName("kriti", "strtolower");