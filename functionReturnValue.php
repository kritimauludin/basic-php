<?php
/*
* Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
* Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci return, lalu diikuti dengan data yang ingin dihasilkan
* Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu
*/

//return type declaration
function sum(int $a, int $b): int
{
    return $a + $b;
}

$result = sum(1, 2);
var_dump($result);

function getName(string $name, $filter)
{
    $filterName = $filter($name);
    echo "Helll $filterName" . PHP_EOL;
}

getName("kriti", "strtoupper");
