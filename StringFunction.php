<?php

/**
 * Sebelumnya saya pernah menggunakan beberapa function bawaan dari PHP untuk memanipulasi data string.
 * Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
 * https://www.php.net/manual/en/ref.strings.php
 */

 //menggabungkan array jadi string
 var_dump(join(",", [1,2,3,4,5]));
 var_dump(implode(",", [1,2,3,4,5]));

 //memecah string jadi array
 var_dump(explode(" ", "Kriti Mauludin"));

 //ubah string jadi lowercase
 var_dump(strtolower("Kriti Mauludin"));

 //ubah string menjadi uppercase
 var_dump(strtoupper("Kriti Mauludin"));

 //ambil sebagian string
var_dump(substr("Kriti Mauludin", 0, 3));

 //hapus whitespace didepan dan dibelakang
 var_dump(trim("      Kriti Mauludin          "));
