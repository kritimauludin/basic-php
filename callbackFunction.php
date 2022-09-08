<?php
/**
 * Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument
 * Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function
 * Namun di PHP ada cara lain untuk implementasi callback, yaitu menggunakan tipe data callable 
 * Dan untuk memanggil callback function tersebut, kita bisa menggunakan function call_user_func(callable, arguments
 */

 //untuk menandakan bahwa suatu parameter merupakan function bisa menggunakan tipe callable artinya bisa dicall
function sayHello(string $name, callable $filter)
{
    //call_user_func salah satu alternatif pemanggilan function (callback)
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}

sayHello("Kriti", "strtoupper");
sayHello("Kriti", "strtolower");
sayHello("Kriti", function (string $name): string {
    return strtoupper($name);
});

//menggunakan arrow function akan lebih singkat lagi dan hasilnya sama
sayHello("Kriti", fn ($name) => strtoupper($name));
