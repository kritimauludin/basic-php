<?php
/*
● Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
● Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
● Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya
*/

//anonymous function di variabel function
$sayGoodBye = function (string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye $finalName" . PHP_EOL;
};
$sayGoodBye("kriti", "strtolower");

//anonymous function sebagai argumen
$sayGoodBye("Kriti", function (string $name): string {
    return strtoupper($name);
});


/*
 ***akses variabel diluar closure***
● Secara default, anonymous function tidak bisa mengakses variabel yang terdapat diluar function
● Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara
explicit menyebutkannya menggunakan kata kunci use lalu diikuti variable-variable yang ingin kita
gunakan
*/

$firstName = "kriti";
$lastName = "mauludin";

//tambahkan keyword use(variabel yg akan dipakai) untuk mengambil variabel global yg diluar closure
$sayHello = function () use($firstName, $lastName){
    echo "Hello $firstName $lastName" . PHP_EOL;
};

$sayHello();

//saat menggunakan use itu secara otomatis valuenya dicopy ke function, sehingga jika data diubah
//isi dari function tetap mengambil dari data yang pertama kali diambil/dicopy
//intinya variabel tidak merefrence karena hanya dicopy
$firstName = "agus";
$lastName = "ahmad";
$sayHello();