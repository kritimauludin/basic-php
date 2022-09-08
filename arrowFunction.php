<?php
/*
 * Arrow function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana pembuatannya
 * Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
 * Hal yang membedakan di arrow function adalah, secara otomatis variable diluar closure bisa digunakan, 
   tidak seperti di anonymous function yang harus disebutkan secara manual menggunakan kata kunci use
 * Pembuatan arrow function tidak menggunakan kata kunci function, melainkan fn
 * Arrow function di khususnya untuk pembuatan function yang sederhana
 */

$total = 500000;
$kembali = 100000;

$anonymousFunction =  function () use ($total, $kembali): string {
    return "Total Bayar $total , kembali $kembali" . PHP_EOL;
};

$arrowFunction = fn () => "Total Bayar $total , kembali $kembali" . PHP_EOL;
echo $anonymousFunction();
echo $arrowFunction();
