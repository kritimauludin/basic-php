<?php
/**
 * Global Scope **
 * Variable yang dibuat diluar function memiliki scope global
 * Variable di scope global hanya bisa diakses dari luar function
 * Artinya di dalam function, kita tidak bisa mengakses variable di global scope
 */



 $name = "kriti"; //global scope

 function sayHello(){
    /**
     * global Keyword **
     * Namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci global
     * Dengan menggunakan kata kunci global, maka kita bisa mengakses variable yang ada di global scope dari dalam function
     */

    // echo "Hello $name". PHP_EOL; //error

    global $name;
    echo "Hello $name". PHP_EOL; //success

    /**
     * $GLOBAL Variable **
     * Selain menggunakan global keyword, setiap variable yang dibuat di global scope, secara otomatis akan disimpan di dalam array $GLOBAL oleh PHP
     * Jadi kita bisa menggunakan $GLOBAL variable dengan key nama variable nya dari dalam function jika ingin mengakses global variable
     * $GLOBAL adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun
     */
    echo $GLOBALS["name"]. PHP_EOL;
    var_dump($GLOBALS);


 }

sayHello(); 

/**
  * Local Scope **
  * Variable yang dibuat di dalam function memiliki scope local
  * Variable di scope local hanya bisa diakses dari dalam function itu sendiri
  * Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain
*/

function createName(){
    $newName = " kriti"; //localscope
}
createName();
echo $newName. PHP_EOL; //error