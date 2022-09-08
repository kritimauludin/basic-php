<?php
/**
 * Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data Array
 * https://www.php.net/manual/en/ref.array.php
 */

 $data = [1,2,3,4,5,6,7,8,9,10,20,30,40,50,60,70,80,90,100];


 //mengambil semua keys milik array
 var_dump(array_keys($data));

 //mengambil semua values milik array
 var_dump(array_values($data));

 //ubah semua data array dengan callback
 var_dump(array_map(fn(int $value) => $value * 2, $data));

//mengurutkan array descending
 var_dump(rsort($data));

 //mengurutkan array ascending
 var_dump(sort($data));

 

 //mengubah posisi data diarray secara random
 var_dump(shuffle($data));